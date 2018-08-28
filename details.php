<?php
session_start();
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($server_name,$user_name,$password,$dbname) ;

$g_id = $_POST["id"];
// echo $username;

$qr = "select * from travel.admin WHERE id = '$g_id' ";

$result = $conn->query($qr);




if ($result->num_rows == 1)

{
    while($row = $result->fetch_assoc()) {

        $pro_id = $row["id"];
        $pro_name = $row["name"];
        $pro_gender = $row["gender"];
        $pro_email= $row["email"];
        $pro_eng = $row["eng"];
        $pro_district = $row["district"];
        $pro_phn = $row["phone"];
        $pro_edu = $row["edu"];
        $pro_com = $row["com"];

        $_SESSION['id'] = $pro_id;
        $_SESSION['name'] = $pro_name;
        $_SESSION['district'] = $pro_district;
        $_SESSION['phn'] = $pro_phn;
        $_SESSION['email'] = $pro_email;

    }

} else {
    echo "0 results";
}

?>





<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="pro.css">

</head>
<body>

<div class="bg">

    <div class="login">
        <img src="reg.png" class="avatar">

        <h1><?php echo $pro_name?></h1>
        <br>





        <p>Gender: <?php echo $pro_gender ?></p>
        <p>District: <?php echo $pro_district?></p>

        <p>Education: <?php echo $pro_edu?></p>
        <p>English Proficiency: <?php echo $pro_eng?></p>
        <p>Communication Skill: <?php echo $pro_com?></p>
        <p>Email: <?php echo $pro_email?></p>

        <p>Phone no: <?php echo $pro_phn?></p>


        <br><br>

        <a id="acc_btn" href="accept.php"> Accept</a>
        <a id="dec_btn" href="decline.php">Decline </a>



    </div>

</div>


</body>
</html>



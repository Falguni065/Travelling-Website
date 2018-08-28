<?php
    session_start();
?>
<html>




<body class="bg">

<link rel="stylesheet" type="text/css" href="log.css">

<?php

        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $dbname = "travel";

        $conn = new mysqli($server_name,$user_name,$password,$dbname);



        $g_name = $_SESSION["gname"];
        $gender = $_SESSION["gender"];
        $district = $_SESSION["location"];
        $email = $_SESSION["email"];
        $phn = $_SESSION["phn"];
        $edu = $_SESSION["edu"];
        $eng = $_SESSION["eng"];
        $com = $_SESSION["com"];



        $sql = "INSERT INTO travel.admin(name,email,phone,district, gender,edu,eng,com) 
        VALUES ('$g_name','$email','$phn','$district','$gender','$edu','$eng','$com')";

if ($conn->query($sql) === TRUE) {
    // echo "DATA INSERTED SUCCESSFULLY";
} else {
    echo "Error creating table: " . $conn->error;
}





?>

<div class="loginn">

    <h2>Thank you, <?php echo $g_name?></h2>
    <h3>for filling up the form. We will check your qualifications
        and get back to you.
    </h3>



        <br>
        <br><br><br>

        <a id="home_btn" href="home3.php"> Home</a>
        <a id="home_btn" href="guide.php"> Guides</a>
</div>


</body>

</html>
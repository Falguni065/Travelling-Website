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

    <h2>WELCOME, </h2>
    <h3>Your registration is complete, Your email address is: <?php echo $email ?></h3>
    <h4>As you have interests on
        <?php
        if(isset($_SESSION["in1"]))
        {
            echo "'".$_SESSION["in1"]."' ";

        }
        if(isset($_SESSION["in2"]))
        {
            echo "'".$_SESSION["in2"]."' ";

        }
        if(isset($_SESSION["in3"]))
        {
            echo "'".$_SESSION["in3"]."' ";

        }
        if(isset($_SESSION["in4"]))
        {
            echo "'".$_SESSION["in4"]."' ";

        }
        if(isset($_SESSION["in5"]))
        {
            echo "'".$_SESSION["in5"]."' ";

        }
        ?>
        we will try to focus on it.



        <br>
        <br><br><br>

        <a id="home_btn" href="home3.php"> Home</a>
        <a id="home_btn" href="new_login.php"> Log In</a>
</div>


</body>

</html>
<?php

session_start();
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($server_name,$user_name,$password,$dbname) ;




if(isset ($_SESSION['name'])) {


    $g_name = $_SESSION['name'];
    $g_dis = $_SESSION['district'];
    $g_con = $_SESSION['phn'];
    $g_email = $_SESSION['email'];
    $ac_id = $_SESSION['id'];


    $qr = "INSERT INTO travel.guides ( name, place, contacts, email) VALUES 
    ('$g_name','$g_dis','$g_con','$g_email')";

    $qr1 = "delete from travel.admin WHERE id = $ac_id ";
    $result = $conn->query($qr);
    $result = $conn->query($qr1);
    header('location:admin.php');


}



?>

<!--
<html>




<body class="bg">

<link rel="stylesheet" type="text/css" href="log.css">


<div class="login">


    <h2>The account has been successfully deleted.</h2>


    <br>
    <br>

    <a id="home_btn" href="home6.php"> Home</a>

</div>


</body>

</html>

-->
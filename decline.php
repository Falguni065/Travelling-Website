<?php

session_start();
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($server_name,$user_name,$password,$dbname) ;




if(isset ($_SESSION['name'])) {


    $ac_id = $_SESSION['id'];

    $qr = "delete from travel.admin WHERE id = $ac_id ";
    $result = $conn->query($qr);
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
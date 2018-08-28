<?php

    session_start();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "travel";
    $conn = new mysqli($server_name,$user_name,$password,$dbname) ;




    if(isset ($_SESSION['name'])) {


    $ac_id = $_POST["id"];





    $qr = "delete from travel.member WHERE id = $ac_id ";
    $result = $conn->query($qr);

    header('location:member3.php');


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
<?php

session_start();
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($server_name,$user_name,$password,$dbname) ;




if(isset ($_SESSION['name'])) {


    $ac_id = $_POST["id"];





    $qr = "delete from travel.guides WHERE id = $ac_id ";
    $result = $conn->query($qr);

    header('location:guide5.php');


}



?>

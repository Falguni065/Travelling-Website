<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";
global  $log;
$log = 0;

$conn = new mysqli($server_name,$user_name,$password,$dbname);

if (isset($_REQUEST["submit"])) {
    $username = $_REQUEST["name"];
    $pass = $_REQUEST["password"];
    $query = mysqli_query($conn, "select * from travel.member WHERE name = '$username' and password = '$pass'");
    $rowcount = mysqli_num_rows($query);


    if ($rowcount == true) {

        session_start();

        $log = 1;
        $_SESSION['name'] = $username;
        $_SESSION['loggedin'] = true;

        header('location:home2.php');



        // echo "<h1 class='hl'>Welcome,$username</h1>";
    } else {
        echo "<h1 class='hl'>Log in failed</h1>";
    }
}
?>
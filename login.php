<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "travel";

    $conn = new mysqli($server_name,$user_name,$password,$dbname);

    if (isset($_REQUEST["submit"])) {
        $user = $_REQUEST["name"];
        $pass = $_REQUEST["password"];
        $query = mysqli_query($conn, "select * from travel.member WHERE name = '$user' and password = '$pass'");
        $rowcount = mysqli_num_rows($query);


        if ($rowcount == true) {
            echo "Log in successfull";
        } else {
            echo "Log in failed";
        }

    }



?>




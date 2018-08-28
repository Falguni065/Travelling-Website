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


        if (isset($_POST["remember"])) {
            setcookie('username', $username, time() + 30);
            setcookie('password', $pass, time() + 30);
        }
        session_start();

        $log = 1;
        $_SESSION['name'] = $username;
        $_SESSION['loggedin'] = true;

        header('location:home3.php');


        // echo "<h1 class='hl'>Welcome,$username</h1>";
    }

    else if ($username == 'admin' && $pass == 'admin') {


            if (isset($_POST["remember"])) {
                setcookie('username', $username, time() + 30);
                setcookie('password', $pass, time() + 30);
            }
            session_start();

            $log = 1;
            $_SESSION['name'] = $username;
            $_SESSION['loggedin'] = true;

            header('location:home6.php');


            // echo "<h1 class='hl'>Welcome,$username</h1>";
        }

        else
    {
        header('location:failed.php');
    }
}

        ?>
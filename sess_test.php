<?php
    ob_start();

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "travel";

    global $islogged;

    $islogged = 2;

    $conn = new mysqli($server_name,$user_name,$password,$dbname);


    if (isset($_REQUEST["submit"])) {
        $username = $_REQUEST["name"];
        $pass = $_REQUEST["password"];
        $query = mysqli_query($conn, "select * from travel.member WHERE name = '$username' and password = '$pass'");
        $rowcount = mysqli_num_rows($query);


        if ($rowcount == true) {

            session_start();
            $_SESSION['name'] = $user_name;
            header('Location:welcome.php');


            //echo "<h1 class='hl echoed'>Welcome,$username</h1>";
            $islogged = 1;


        } else {
            $islogged = 0;
            //echo "<h1 class='hl echoed'>Log in failed</h1>";
        }
    }

    ob_end_flush();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="log.css">
    </head>

    <body>

        <div class="bg">
            <div class="login">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl8AV6lgmbRdQ61imSvvwmWSkwdk25C--a7Kl2ed7PE_fGuso" class="avatar">
                <h1>Log In Here</h1>
                <form method="post">
                    <p>Username</p>
                    <input type="text" name="name" placeholder="Enter Usename">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password"><br><br>
                    <input type="submit" name="submit" value="login">
                </form>
                <?php
                if($islogged == 1)
                {
                    echo "<h1 class='h1'>Welcome,$username</h1>";
                }
                else if($islogged == 0) {
                    echo "<h1 class='hl failed-echo'>Log in failed</h1>";
                }
                ?>
            </div>

        </div>

    </body>

</html>



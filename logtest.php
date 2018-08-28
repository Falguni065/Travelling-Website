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



        if(isset($_POST["remember"]))
        {
            setcookie('username',$username,time()+30);
            setcookie('password',$pass,time()+30);
        }
        session_start();

        $log = 1;
        $_SESSION['name'] = $username;
        $_SESSION['loggedin'] = true;

        header('location:home3.php');



        // echo "<h1 class='hl'>Welcome,$username</h1>";
    } else {
        header('location:failed.php');




       /* echo "

                <!DOCTYPE html>

                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Log In</title>
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"log.css\">
                </head>




                <body>



                <div class=\"bg\">



                    <div class=\"login\">
                        <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl8AV6lgmbRdQ61imSvvwmWSkwdk25C--a7Kl2ed7PE_fGuso\" class=\"avatar\">
                        <h1>Log In Here</h1>
                        <form action=\"logtest.php\" method=\"post\">
                            <p>Username</p>
                            <input type=\"text\" name=\"name\" placeholder=\"Enter Usename\">
                            <p>Password</p>
                            <input type=\"password\" name=\"password\" placeholder=\"Enter Password\"><br><br>
                            <input type=\"submit\" name=\"submit\" value=\"login\">
                            <h3>Log in failed. Please, try again.</h3>

                        </form>

                    </div>

                </div>

                </body>





                </html>


";*/

    }
}
?>


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
        <form action="logtest.php" method="post">
            <p>Username</p>
            <input type="text" name="name" id="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="pass" placeholder="Enter Password"><br><br>
            <div id="rd"><input type="checkbox" name="remember" value="1" >remember me<br></div>
            <input type="submit" name="submit" value="login">
            <h3>Log in failed. Please, try again.</h3>
        </form>

    </div>

    <?php
    if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
    {
        $username = $_COOKIE["username"];
        $password = $_COOKIE{"password"};

        echo "<script>
                    document.getElementById('user').value = '$username';
                     document.getElementById('pass').value = '$password';
                </script>";
    }
    ?>

</div>

</body>





</html>



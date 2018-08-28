

<!DOCTYPE html>

<html lang="en">
<head>
    <a href="home3.php" id="sp">Home</a>
    <a href="3rd_reg.php" id="rp">Register</a>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="log.css">
</head>




<body>



<div class="bg">



    <div class="login">
        <img src="reg.png" class="avatar">
        <h1>Log In Here</h1>
        <form action="guide_next.php" method="post">
            <p>Username</p>
            <input type="text" name="name" id="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="pass" placeholder="Enter Password"><br><br>
            <div id="rd"><input type="checkbox" name="remember" value="1" >remember me<br></div>
            <input type="submit" name="submit" value="login">
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



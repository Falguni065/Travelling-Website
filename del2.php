<?php

        session_start();
        if(isset ($_SESSION['name'])) {



            include('pro_data.php');

            $qr = "delete from travel.member WHERE id = $pro_id ";

            $result = $conn->query($qr);
            session_destroy();

        }



?>
<html>




<body class="bg">

<link rel="stylesheet" type="text/css" href="log.css">


<div class="login">


        <h2>Your account has been successfully deleted. Please, create a new account to continue
        or go to homepage.</h2>


        <br>
        <br>

        <a id="home_btn" href="home3.php"> Home</a>
        <a id="home_btn" href="3rd_reg.php"> Register</a>
</div>


</body>

</html>
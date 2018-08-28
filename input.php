<html>




    <body class="bg">

            <link rel="stylesheet" type="text/css" href="log.css">

            <?php

            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $dbname = "travel";

            $conn = new mysqli($server_name,$user_name,$password,$dbname);



            /* Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";*/


            $m_name = $_POST["fname"]." ".$_POST["lname"];
            $gender = $_POST["gender"];
            $country = $_POST["location"];
            $email = $_POST["email"];
            $pass = $_POST["password"];



            $sql = "INSERT INTO travel.member(name,gender,country,email,password) VALUES ('$m_name','$gender','$country','$email','$pass')";

            if ($conn->query($sql) === TRUE) {
               // echo "DATA INSERTED SUCCESSFULLY";
            } else {
                 echo "Error creating table: " . $conn->error;
            }





            ?>

            <div class="login">

            <h2>WELCOME, <?php echo $m_name?></h2><br>
            <h3>Your registration is complete, Your email address is: <?php echo $email ?></h3><br>
            <h4>As you have interests on <?php echo $_POST["interest1"]; ?>-<?php echo $_POST["interest2"]; ?>-<?php echo $_POST["interest3"]; ?>
                -<?php echo $_POST["interest4"]; ?> -<?php echo $_POST["interest5"]; ?> we will try to focus on it</h4>


            <br>
            <br>

           <!-- <a href="member.php">SHOW DATA</a> -->
            </div>


    </body>

</html>
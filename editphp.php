<?php
    include ('pro_data.php');
    session_start();
?>

<html>




<body class="bg">

<link rel="stylesheet" type="text/css" href="log.css">

<?php

        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $dbname = "travel";

        $conn = new mysqli($server_name,$user_name,$password,$dbname);



        $m_name = $_POST["fname"];
        $gender = $_POST["gender"];
        $country = $_POST["location"];
        $email = $_POST["email"];
        $pass = $_POST["password"];



        $sql = "update travel.member set name = '$m_name' ,gender = '$gender', country = '$country', email='$email',password ='$pass' WHERE id = $pro_id";

        if ($conn->query($sql) === TRUE) {
            // echo "DATA INSERTED SUCCESSFULLY";
        } else {
            echo "Error creating table: " . $conn->error;
        }





?>

<div class="login">

    <h2>Hello, <?php echo $m_name?>, your profile has been updated. Please, log in again with your
    updated account or go back home.</h2><br>
    <?php

    if(isset ($_SESSION['name']))
    {
        session_destroy();

    }
    ?>
    <a id="hom_btn" href="home3.php"> Home</a>
    <a id="in_btn" href="new_login.php"> Log In </a>





</div>


</body>

</html>
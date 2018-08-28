<?php
include ('pro_data.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="pro.css">

</head>
<body>

<div class="bg">

    <div class="login">
        <img src="reg.png" class="avatar">

        <h1>Your Profile</h1>
        <br>



            <p>Name: <?php echo $pro_name?></p>


            <p>Email: <?php echo $pro_email?></p>



            <p>Password: <?php echo $pro_pass?></p>


            <p>Country: <?php echo $pro_country?></p>



            <p>Gender: <?php echo $pro_gender ?></p>

            <br><br>

        <a id="log_btn" href="home3.php"> Home</a>
        <a id="edit_btn" href="edit.php"> Edit Profile </a>
        <a id="del_btn" href="del2.php"> Delete Account </a>
        <a id="out_btn" href="out.php"> Log Out </a>


    </div>

</div>


</body>
</html>




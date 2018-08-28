<?php
    include ('pro_data.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="reg.css">

</head>
<body>

<div class="bg">

    <div class="login">
        <img src="reg.png" class="avatar">

        <h1>Edit Profile</h1>

        <form  action="editphp.php" method="post">
            <label>Name</label>
            <input type="text" name="fname" id="test" value="<?php echo $pro_name?>">





            <label>Email</label>
            <input type="email" name="email" id="test" value="<?php echo $pro_email?>">


            <label>Password</label>
            <input type="password" name="password" id="test" value="<?php echo $pro_pass?>">




            <label>Country</label>
            <input type="text" name="location" id="test" value="<?php echo $pro_country?>">



            <label>Gender</label><br><br>

            <input type="radio" name="gender"  value="male" id="rd" value="Male" <?php if($pro_gender=='male'){ echo "checked=checked";}  ?>> <span id="but">Male</span>
            <input type="radio" name="gender"  value="female" id="rd" value="Female" <?php echo ($pro_gender == 'female')?"checked" : "";  ?>><span id="but">Female</span><br>


            <?php

                if($pro_gender == "Male")
                {
                    "<input type=\"radio\" name=\"gender\"  value=\"male\" id=\"rd\" value=\"Male\" checked> <span id=\"but\">Male</span>";
                }
                else
                {
                    " <input type=\"radio\" name=\"gender\"  value=\"female\" id=\"rd\" value=\"Female\" checked><span id=\"but\">Female</span><br>";
                }

            ?>





            <br>


            <input type="submit" value="Submit">
        </form>
    </div>

</div>


</body>
</html>




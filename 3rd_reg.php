<?php
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $dbname = "travel";

        $conn = new mysqli($server_name,$user_name,$password,$dbname);


        if ($_SERVER['REQUEST_METHOD']== "POST") {
                $valid = true;

                $user = $_POST["fname"];

                $qr = "SELECT * FROM travel.member WHERE name = '$user'";
                $result = $conn->query($qr);





                if (empty($_POST["fname"])) {
                    $firstNameErr = "username is required";
                    $valid = false;
                }

                if ($result->num_rows > 0)
                {
                    $dup = "This username already exists";
                    $valid = false;

                }
                if (empty($_POST["email"])) {
                    $emailErr = "email is required";
                    $valid = false;
                }

                if (empty($_POST["password"])) {
                    $passErr = "password is required";
                    $valid = false;
                }

                if ($_POST["password"]!=$_POST["conpass"]) {
                    $cpassErr = "password is not same";
                    $valid = false;
                }

                if($valid){
                    session_start();
                    $_SESSION['name'] = $_POST["fname"];
                    $_SESSION['email'] = $_POST["email"];
                    $_SESSION['location'] = $_POST["location"];
                    $_SESSION['gender'] = $_POST["gender"];
                    $_SESSION['password'] = $_POST["password"];
                    $_SESSION['in1'] = $_POST["interest1"];
                    $_SESSION['in2'] = $_POST["interest2"];
                    $_SESSION['in3'] = $_POST["interest3"];
                    $_SESSION['in4'] = $_POST["interest4"];
                    $_SESSION['in5'] = $_POST["interest5"];
                    header('Location:2nd_input.php');
                        exit();
                    }

        }

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

                <h1>Registration Form</h1>

                <form method="post">
                    <label>Name</label>  * <?php echo $firstNameErr; ?> <?php echo $dup; ?>
                    <input type="text" name="fname" id="test" value="<?php echo $_POST["fname"] ?>">





                    <label>Email</label>  * <?php echo $emailErr; ?>
                    <input type="email" name="email" id="test" value="<?php echo $_POST["email"] ?>">


                    <label>Password</label>  * <?php echo $passErr; ?>
                    <input type="password" name="password" id="test" value="<?php echo $_POST["password"] ?>">

                    <label>Confirm Password</label>  * <?php echo $cpassErr; ?>
                    <input type="password" name="conpass" id="test" value="<?php echo $_POST["conpass"] ?>">



                    <label>Country</label>
                    <input type="text" name="location" id="test"value="<?php echo $_POST["location"] ?>">

                    <label>Gender</label><br><br>


                    <input type="radio" name="gender"  value="male" id="rd"> <span id="but">Male</span>
                    <input type="radio" name="gender"  value="female" id="rd"><span id="but">Female</span><br>


                    <br>

                    <label>Interests</label><br><br>
                    <input type="checkbox" name="interest1" value="Mountain"> <span id="but">Mountain</span>
                    <input type="checkbox" name="interest2" value="Sea Beach"> <span id="but">Sea Beach</span>
                    <input type="checkbox" name="interest3" value="Island"> <span id="but">Island</span>
                    <input type="checkbox" name="interest4" value="Art and Culture"> <span id="but">Art and Culture</span>
                    <input type="checkbox" name="interest5" value="Jungle"><span id="but"> Jungle</span>
                    <br><br><br>

                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>


        </body>
        </html>




<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($server_name,$user_name,$password,$dbname);


if ($_SERVER['REQUEST_METHOD']== "POST") {
    $valid = true;

    $user = $_POST["fname"];

    $qr = "SELECT * FROM travel.admin WHERE name = '$user'";
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


    if($valid){
        session_start();
        $_SESSION['gname'] = $_POST["fname"];
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['phn'] = $_POST["phn"];
        $_SESSION['location'] = $_POST["location"];
        $_SESSION['gender'] = $_POST["gender"];
        $_SESSION['edu'] = $_POST["edu"];
        $_SESSION['eng'] = $_POST["eng"];
        $_SESSION['com'] = $_POST["com"];

        header('Location:g_input.php');
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

        <h1>Guide Registration Form</h1>

        <form method="post">
            <label>Name</label>  * <?php echo $firstNameErr; ?> <?php echo $dup; ?>
            <input type="text" name="fname" id="test" value="<?php echo $_POST["fname"] ?>">





            <label>Email</label>  * <?php echo $emailErr; ?>
            <input type="email" name="email" id="test" value="<?php echo $_POST["email"] ?>">

            <label>Phone No</label>
            <input type="text" name="phn" id="test"  value="<?php echo $_POST["phn"] ?>" >





            <label>District</label>
            <input type="text" name="location" id="test"value="<?php echo $_POST["location"] ?>">

            <label>Gender</label><br><br>


            <input type="radio" name="gender"  value="male" id="rd"> <span id="but">Male</span>
            <input type="radio" name="gender"  value="female" id="rd"><span id="but">Female</span><br>


            <br>

            <label>Education</label><br><br>


            <input type="radio" name="edu"  value="SSC" id="rd"> <span id="but">SSC</span>
            <input type="radio" name="edu"  value="HSC" id="rd"> <span id="but">HSC</span>
            <input type="radio" name="edu"  value="Graduate" id="rd"> <span id="but">Graduate</span>
            <input type="radio" name="edu"  value="Post Graduate" id="rd"> <span id="but">Post Graduate</span>

            <br><br>

            <label>How about your proficiency in English?</label><br><br>


            <input type="radio" name="eng"  value="Very Good" id="rd"> <span id="but">Very Good</span>
            <input type="radio" name="eng"  value="Good" id="rd"> <span id="but">Good</span>
            <input type="radio" name="eng"  value="Medium" id="rd"> <span id="but">Medium</span>
            <input type="radio" name="eng"  value="Weak" id="rd"> <span id="but">Weak</span>

            <br><br>

            <label>How about your communication skills?</label><br><br>


            <input type="radio" name="com"  value="Strong" id="rd"> <span id="but">Strong</span>
            <input type="radio" name="com"  value="Good" id="rd"> <span id="but">Good</span>
            <input type="radio" name="com"  value="Medium" id="rd"> <span id="but">Medium</span>
            <input type="radio" name="com"  value="Weak" id="rd"> <span id="but">Weak</span>

            <br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

</div>


</body>
</html>




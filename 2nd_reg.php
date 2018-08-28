<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="reg.css">

</head>
<body>

<div class="bg">

    <div class="login">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl8AV6lgmbRdQ61imSvvwmWSkwdk25C--a7Kl2ed7PE_fGuso" class="avatar">

        <h1>Registration Form</h1>

        <form  action="2nd_input.php" method="post">
            <label>Name</label>
            <input type="text" name="fname" id="test">





            <label>Email</label>
            <input type="email" name="email" id="test">


            <label>Password</label>
            <input type="password" name="password" id="test">




            <label>Country</label>
            <input type="text" name="location" id="test">



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




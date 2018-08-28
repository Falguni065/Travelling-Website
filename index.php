<html>
<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body id="in1">

<h2>WELCOME, <?php echo $_GET["fname"]; ?>  <?php echo $_GET["lname"];?></h2><br>
<h3>Your registration is complete, Your email address is: <?php echo $_GET["email"]; ?></h3><br>
<h4>As you have interests on <?php echo $_GET["interest1"]; ?>-<?php echo $_GET["interest2"]; ?>-<?php echo $_GET["interest3"]; ?>
    -<?php echo $_GET["interest4"]; ?> -<?php echo $_GET["interest5"]; ?> we will try to focus on it</h4>

</body>
</html>
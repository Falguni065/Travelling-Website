<html>
<head>
    <link rel="stylesheet" type="text/css" href="table.css">
    <title>tour guide</title>
    <style>
        p
        {
            margin-left: 30px;
            margin-top: 20px;
        }
    </style>
</head>


<body class="bg">
<div id="nav3">
    <p>Are you interested to work as a tourist guide?<br>Then go to register page and fill up the form.</p>
    <a href="home3.php" id="sp">Home</a>
    <a href="g_form.php" id="rp">Register</a>
    <h1 id="header">...TOUR GUIDES...</h1>
</div>
<br><br>


<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($server_name,$user_name,$password,$dbname);


/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/




echo "<table>";
echo  "<thead>
                            <tr>
                            
                            <th>ID</th>    
            
                            <th>NAME</th>
                            <th>PLACE</th>
                            <th>CONTACT</th>
                            <th>EMAIL</th>
                          
                            
                            </tr>
            
                        </thead>";

$qr = "SELECT * FROM travel.guides";
$result = $conn->query($qr);

if ($result->num_rows > 0)

{
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"].
            "</td><td>" .$row["name"].
            "</td><td>" .$row["place"].
            "</td><td>". $row["contacts"].

            "</td><td>" . $row["email"].
            //"</td><td>" . $row["password"].//
            "</td></tr>";
    }

} else {
    echo "0 results";
}

echo"</table>";

?>



</body>

</html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="table.css">
    <a href="home6.php" id="sp">Home</a>
    <title>request</title>
</head>


<body class="bg">
<div id="nav3">
    <h1 id="header">...REQUESTS...</h1>
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
                  
                            <th>DISTRICT</th>
                            <th>EDUCATION</th>
                            <th>PHONE NO</th>
                        
                            <th>INFORMATION</th>
                            
                            </tr>
            
                        </thead>";

$qr = "SELECT * FROM travel.admin";
$result = $conn->query($qr);

if ($result->num_rows > 0)

{
    while($row = $result->fetch_assoc()) {
        echo "<tr><form action='details.php' method='post'><td><input type='number'
                  name='id' id = 'tid' readonly = 'readonly'  value='" . $row["id"].
            "'</td><td>" .$row["name"].

            "</td><td>". $row["district"].
            "</td><td>". $row["edu"].
            "</td><td>" . $row["phone"].


            //"</td><td>" . $row["password"].//
            "</td><td><input type='submit' id='sid' value='More Information'></td></form></tr>";
    }

}

echo"</table>";

?>



</body>

</html>
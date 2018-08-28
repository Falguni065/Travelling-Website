<html>
    <head>
        <link rel="stylesheet" type="text/css" href="table.css">
        <a href="home3.php" id="sp">Home</a>
        <title>members</title>
    </head>


<body class="bg">
        <div id="nav3">
            <h1 id="header">...MEMBERS...</h1>
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
                            <th>GENDER</th>
                            <th>COUNTRY</th>
                            <th>EMAIL</th>
                          
                            
                            </tr>
            
                        </thead>";

            $qr = "SELECT * FROM travel.member";
            $result = $conn->query($qr);

            if ($result->num_rows > 0)

            {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"].
                        "</td><td>" .$row["name"].
                        "</td><td>" .$row["gender"].
                        "</td><td>". $row["country"].

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
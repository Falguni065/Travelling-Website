<?php

session_start();

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="table.css">
        <a href="home6.php" id="sp">Home</a>
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


    echo "<table>";
    echo  "<thead>
                 <tr>
                                
                      <th>ID</th>    
                      <th>NAME</th>
                      <th>GENDER</th>
                      <th>COUNTRY</th>                            
                      <th>EMAIL</th>
                      <th>DELETE ACCOUNT</th>

                </tr>
                
             </thead>";

    $qr = "SELECT * FROM travel.member";
    $result = $conn->query($qr);

    if ($result->num_rows > 0)

    {
        while($row = $result->fetch_assoc()) {

            $_SESSION['del_id'] = $row["id"];
            echo "<tr><form action='del3.php' method='post'><td><input type='number'
                  name='id' id = 'tid' readonly = 'readonly'  value='"
                . $_SESSION['del_id'].
                "'></td><td>" .$row["name"].
                "</td><td>" .$row["gender"].
                "</td><td>". $row["country"].

                "</td><td>" . $row["email"].
                "</td><td><input type='submit' id='sid' value='DELETE'></td></form></tr>";
        }
    }

    else
    {
        echo "0 results";
    }

    echo"</table>";

?>

    </body>

    </html>
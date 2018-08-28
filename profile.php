<?php
    session_start();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "travel";
    $conn = new mysqli($server_name,$user_name,$password,$dbname) ;

    $username = $_SESSION['name'];
    echo $username;
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/


    $qr = "select * from travel.member WHERE name = '$username' ";

    $result = $conn->query($qr);




    if ($result->num_rows == 1)

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

?>

<a href="out.php">log out</a>
<a href="edit.php">edit</a>
<a href="delete.php">delete</a>


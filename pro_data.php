<?php
        session_start();
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $dbname = "travel";
        $conn = new mysqli($server_name,$user_name,$password,$dbname) ;

        $username = $_SESSION['name'];
       // echo $username;

        $qr = "select * from travel.member WHERE name = '$username' ";

        $result = $conn->query($qr);




        if ($result->num_rows == 1)

        {
            while($row = $result->fetch_assoc()) {

                $pro_id = $row["id"];
                $pro_name = $row["name"];
                $pro_gender = $row["gender"];
                $pro_email= $row["email"];
                $pro_pass = $row["password"];
                $pro_country = $row["country"];

               /* echo "<tr><td>" . $row["id"].
                    "</td><td>" .$row["name"].
                    "</td><td>" .$row["gender"].
                    "</td><td>". $row["country"].

                    "</td><td>" . $row["email"].
                    //"</td><td>" . $row["password"].//
                    "</td></tr>";*/
            }

        } else {
            echo "0 results";
        }

?>





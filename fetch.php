<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "travel";

    $conn = new mysqli($server_name,$user_name,$password,$dbname);

    $qr = "SELECT * FROM travel.guides WHERE name LIKE '%".$_POST."%'";
    $result = $conn->query($qr);

    if ($result->num_rows > 0)

    {
        while($row = $result->fetch_assoc()) {
            $data[] = $row["name"];
        }

        echo json_encode($data);

    } else {
        echo "0 results";
    }
?>
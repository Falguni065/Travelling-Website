<html>
    <head>
        <link rel="stylesheet" type="text/css" href="try2.css">
    </head>
    <body>

        <?php

        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $dbname = "travel";

        $conn = new mysqli($server_name,$user_name,$password,$dbname);


        $qr = "SELECT * FROM travel.place WHERE name LIKE '".$_POST["search"]."%'";
        $result = $conn->query($qr);



        if ($result->num_rows > 0)

        {
            while($row = $result->fetch_assoc()) {
                echo "<div id= 't1'><a href='".$row["page"]."'>".$row["name"]."</a></div>";

            }

        } else {
            echo "0 results";
        }

        echo"</table>";

        ?>
    </body>
</html>


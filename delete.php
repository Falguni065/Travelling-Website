<?php
    include ('pro_data.php');

$qr = "delete from travel.member WHERE id = $pro_id ";

$result = $conn->query($qr);




if ($result->num_rows == 1)

{
    echo "deleted successfully";


} else {
    echo "not deleted";
}


?>

<a href="out.php">home</a>

<?php
session_start();

if (isset($_SESSION['loggedin']))

{
    header('location:guide.php');

}

else
{
    header('location:guide_log.php');
}

?>


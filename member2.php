<?php
        session_start();

        if (isset($_SESSION['loggedin']))

        {
            header('location:member.php');

        }

        else
        {
            header('location:mem_log.php');
        }

 ?>


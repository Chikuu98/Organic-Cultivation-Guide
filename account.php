<?php

    require_once('header.php');
    if(isset($_GET['Well']))
    {

        if($_SESSION['U_ID'])
        {
            echo'<div class="display-4 mt-5 text-center"> You Have Successfully Logged In</div>';
        }
        else
        {

        }
    }
    else
    {
        header("location: index.php");
        exit();
    }

?>
<?php
    session_start();
    //check if the session exists
    if(isset($_SESSION['uid']) || isset($_SESSION['admin']))
    {
        //destroy the existing session
        session_destroy();
        //redirect to home page
        header('Location:index.php');
    }
    else
    {
        header('Location:index.php');
    }
?>












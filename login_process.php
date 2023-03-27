<?php

    include("backend/login.php");
    $obj = new Login();
    if(isset($_POST['admin_btn']))
    {
        $obj->admin_login($_POST);
    }

    session_start();
    if(isset($_SESSION['id']))
    {
        header('location:deshbord.php');
    }

?>
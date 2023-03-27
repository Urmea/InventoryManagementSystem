<?php
include("backend/login.php");
session_start();
$adminID = $_SESSION['id'];
$admin_email = $_SESSION['admin_email'];
if($adminID==null)
{
    header('location:index.php');
}
if(isset($_GET['adminLogout']))
{
    $obj = new Login();
    $obj->adminLogout();
} 
?>
<?php
require 'includes/connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$old_password=$_POST['oldpassword'];
$email=$_SESSION['email'];
$password="select password from users where email='$email'";
$password_result= mysqli_query($con, $password)or die(mysqli_error($con));
if($old_password===$password_result)
{
    $new_password=$_POST['newpassword'];
    $update_password="update users set password='$new_password' where email='$email'";
    $update_password_result= mysqli_query($con, $update_password) or die(mysqli_error($con));
    header('location:login.php');
}
else
{
    header('location:setting.php');
}

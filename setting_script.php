<?php
require 'includes/connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$old_password=MD5($_POST['oldpassword']);
$email=$_SESSION['email'];
$new_password=MD5($_POST['newpassword']);
$new_password1 = MD5($_POST['newpassword1']);
$query ="SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$query_result= mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($query_result);
$password_result = $row['password'];


if($new_password != $new_password1)
{
    header('location: setting.php?error=The two passwords don\'t match');
} 
else
{

if($old_password===$password_result)
{

    $query = "UPDATE  users SET password = '" . $new_password . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: setting.php?error=Password Updated');
    } 
    else
        header('location: setting.php?error=Wrong Old Password');
}
?>
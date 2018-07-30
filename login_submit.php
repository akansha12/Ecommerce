<?php
require 'includes/connection.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= MD5($_POST['password']);
$select_query="SELECT id,email,password FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$select_query_result= mysqli_query($con, $select_query)or die($mysqli_error($con));
$total_rows= mysqli_num_rows($select_query_result);
if($total_rows==0)
{   
    $error = "<span class='red'>No user exists, please sign up </span>";
    header('location: login.php?error =' . $error);
}
else
{
    $row= mysqli_fetch_array($select_query_result);
    if($row['password']===$password)
    {
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];
        header('location:products.php');
    }
    else
    {
        $error = "<span class='red'>Please enter correct E-mail id or Password</span>";
        header('location: login.php?error =' . $error);        
    }
}
?>



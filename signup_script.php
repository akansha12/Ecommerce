<?php

require 'includes/connection.php';
$name= mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$unique="SELECT id from users WHERE email='$email' ";
$unique_result=mysqli_query($con,$unique);
$unique_row= mysqli_num_rows($unique_result);
$password=md5( $_POST['password']);
$contact=$_POST['contact'];
$city= mysqli_real_escape_string($con,$_POST['city']);
$address= mysqli_real_escape_string($con,$_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";
if($unique_row>0)
{
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
}
else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
$user_registration="INSERT INTO users(name,email,password,contact,city,address)VALUES('".$name."','".$email."','".$password."','".$contact."','".$city."','".$address."')";
$user_registration_submit=mysqli_query($con,$user_registration) or die(mysqli_error($con));
echo 'User Successfully Registered';
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
header('location:products.php');
}

?>

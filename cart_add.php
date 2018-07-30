<?php

 require 'includes/connection.php';
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $item_id=$_GET['id'];
 $user_id=$_SESSION['id'];
 $product_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 1) ";
 $product_query_result= mysqli_query($con, $product_query)or die(mysqli_error($con));
 header('location:products.php');
 }
 
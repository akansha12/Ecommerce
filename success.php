<?php
require 'includes/connection.php';
if(!isset($_SESSION['email']))
{
    header('location.php');
}

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Confirmed</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link type="text/css" rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <?php
        $item_id=$_GET['item_id'];
        $user_id=$_SESSION['id'];
        $update_status="update users_items set status='confirmed' where user_id='$user_id' && item_id='$item_id'";
        $update_status_result= mysqli_query($con, $update_status);
        ?>
        <div style="margin-top: 200px; margin-bottom: 200px" class="container text-center">
            <p>Your order is confirmed.<br> Thank you for shopping with us. <br>Click<a href="products.php"> here</a> to purchase any other item</p>
        </div>
         <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

<?php
require 'includes/connection.php';
if(!isset($_SESSION['email']))
{
    header('location. index.php');
}


$user_id = $_SESSION['id'];
$item_ids_string = $_GET['item_id'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status=0 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status=1";
mysqli_query($con, $query) or die($mysqli_error($con));
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
        
        <div style="margin-top: 200px; margin-bottom: 200px" class="container text-center">
            <p>Your order is confirmed.<br> Thank you for shopping with us. <br>Click<a href="products.php"> here</a> to purchase any other item</p>
        </div>
         <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

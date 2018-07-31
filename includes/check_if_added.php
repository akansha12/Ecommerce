<?php

function check_if_added_to_cart($item_id)
{
    $con= mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    $user_id=$_SESSION['id'];
    $select_id="SELECT * FROM users_items WHERE item_id='$item_id' and user_id ='$user_id' and status='Added to cart' ";
    $select_id_result= mysqli_query($con, $select_id);
    $total_row_fetched= mysqli_num_rows($select_id_result);
    if($total_row_fetched>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
            
  
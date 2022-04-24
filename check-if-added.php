<?php


function check_if_added_to_cart($item_id){
    $user_id=$_SESSION['user_id'];
    include 'common.php';
    $check_query="SELECT * FROM users_products WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
    $result=mysqli_query($con,$check_query) or die(mysqli_error($con));
    $num=mysqli_num_rows($result);
    if($num>=1){
        return 1;
    }else{
        return 0;
    }
}









?>
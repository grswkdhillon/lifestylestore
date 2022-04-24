<?php

include 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

$user_id=$_SESSION['user_id'];

$oldpassword=$_POST['oldpassword'];
$oldpassword=mysqli_real_escape_string($con,$oldpassword);
$oldpassword=md5($oldpassword);

$newpassword=$_POST['newpassword'];
$newpassword=mysqli_real_escape_string($con,$newpassword);
$newpassword=md5($newpassword);

$repnewpassword=$_POST['repnewpassword'];
$repnewpassword=mysqli_real_escape_string($con,$repnewpassword);
$repnewpassword=md5($repnewpassword);

$check_query="SELECT users.password FROM users WHERE id='".$user_id."'";
$check_result=mysqli_query($con,$check_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($check_result);
$orgpassword=$row['password'];


if($newpassword!=$repnewpassword){
    header('location:settings.php?error=New passwords doesnot match.');

}else{

    if($oldpassword==$orgpassword){
        $change_query="UPDATE users SET password='$newpassword' WHERE id='".$user_id."'";
        $change_result=mysqli_query($con,$change_query) or die(mysqli_error($con));
        header('location:settings.php?error=Password updated successfully.');
    }
    else{
        header('location:settings.php?error=Old password is wrong.');
    }

}


?>
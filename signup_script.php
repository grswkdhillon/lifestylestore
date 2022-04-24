<?php

require 'common.php';

$fname=$_POST['fname'];
$fname=mysqli_real_escape_string($con,$fname);

$lname=$_POST['lname'];
$lname=mysqli_real_escape_string($con,$lname);

$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);

$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);

$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);

$address=$_POST['address'];
$address=mysqli_real_escape_string($con,$address);

$city=$_POST['city'];
$city=mysqli_real_escape_string($con,$city);

$select_query="SELECT id from users WHERE email='" .$email."'";
$result=mysqli_query($con,$select_query);

$num=mysqli_num_rows($result);

if($num==0){

$query="INSERT INTO users (first_name,last_name,email,password,contact,address,city) VALUES ('" . $fname."','" .$lname."','".$email."','".$password."','".$contact."','".$address."','".$city."')";
mysqli_query($con,$query) or die(mysqli_error($con));
$user_id=mysqli_insert_id($con);
$_SESSION['email']=$email;
$_SESSION['user_id']=$user_id;
$_SESSION['user_fname']=$fname;
header("Location:products.php");
}
else{
    header("Location:signup.php?error=emailalredyexist");
}


?>
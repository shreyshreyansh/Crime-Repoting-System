<?php
require ("includes/common.php"); 
$email=$_POST['email'];
$password=$_POST['password'];
$name = mysqli_real_escape_string($con, $name);
$password = mysqli_real_escape_string($con, $password);
$query="SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$total_rows=mysqli_num_rows($query_result);
if($total_rows==1){
	$row=mysqli_fetch_array($query_result);
	$_SESSION['email']=$email;
	$_SESSION['user_id']=$row['id'];
	header('location: index.php');
}else{
	$error = "Please enter correct E-mail id and Password";
	header('location: login_2.php?error=' . $error);
}
?>
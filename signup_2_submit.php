<?php require("includes/common.php");
if(isset($_SESSION['email'])){
	header('location: dashboard.php');
}
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  $query="SELECT * FROM users WHERE email='$email'";
  $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($query_result);
if($total_rows_fetched>0){
	$m = "<span class='red'>Email Already Exists</span>";
	header('location: signup_2.php?m1='.$m);
}else{
	$query_2="INSERT INTO users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
	mysqli_query($con,$query_2) or die(mysqli_error($con));
	$user_id=mysqli_insert_id($con);
	$_SESSION['email']=$email;
	$_SESSION['user_id']=$user_id;
	header('location: index.php');
}
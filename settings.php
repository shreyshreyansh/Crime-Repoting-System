<?php
require_once("includes/common.php");
if(!isset($_SESSION['email'])){
   header('location: login.php');
}?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/animate.min.css">
    <link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/bootstrap-dropdownhover.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/js/bootstrap-dropdownhover.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <title>Settings page</title>
</head>
<body>
	<?php
 require("includes/header.php");
 ?>
	<div class="container" style="margin-bottom: 13.3%;margin-top: 4%;width:40%; margin-top: 13%;">
		<h1>Change Password</h1>
		<form method="POST" action="settings_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="old-password" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password1" placeholder="Retype Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
	</div>
	<?php
  require("includes/footer.php"); 
 ?>
</body>
</html>
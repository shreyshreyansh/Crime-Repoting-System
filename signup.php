<?php require("includes/common.php"); ?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/animate.min.css">
	<link rel="stylesheet" href="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/css/bootstrap-dropdownhover.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://kybarg.github.io/bootstrap-dropdown-hover/assets/bootstrap-dropdownhover/js/bootstrap-dropdownhover.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
     <title>Signup page</title>
</head>
<body>
	<?php require("includes/header.php"); ?>
    <div class="container">
    <div class="col-xs-6 col-xs-offset-3 login_content" style="border: 2px solid #87CEEB; margin-top: 12%; padding-bottom: 50px; color:#000; margin-bottom: 14.6%;">
            	<center><h3 style="margin-bottom: 30px;">Choose Account Type</h3></center>
            <div class="col-xs-3 thumbnail" style="border: 1.5px solid #87CEEB; float:left; margin-left: 80px;">
            	<a href="signup_1.php"><img src="img/11.png" alt="ri"></a>
            	<center><div class="caption"><h3>Policemen</h3></div></center>
		    </div>
		    <div class="col-xs-3  thumbnail" style="border: 1.5px solid #87CEEB; float:right; margin-right: 80px;">
            	<a href="signup_2.php"><img src="img/12.jpg" alt="ri"></a>
            	<center><div class="caption"><h3>User</h3></div></center>
		    </div>
    </div></div>
    <?php require("includes/footer.php"); ?>
</body>
</html>
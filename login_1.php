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
     <title>Login page</title>
</head>
<body>
	<?php require("includes/header_1.php"); ?>
    <div class="container">
    <div class="col-xs-6 col-xs-offset-3 login_content" style="border: 2px solid #87CEEB; margin-top: 12%; padding-bottom: 50px; color:#000; margin-bottom: 17%;">
            	<center><h6 style="margin-bottom: 30px; margin-top: 20px; color:#a7a6a6">Hello Policemen!<br>Please fill out the form below to get started</h6></center>
            <form method="POST" action="login_1_submit.php">
                        <div class="form-group">
                            <label for="email" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Email</label>
                            <center><input type="text" class="form-control input-lg" name="email" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="password" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Password</label>
                            <center><input type="text" class="form-control input-lg" name="password" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
            <div class="col-xs-4" style="margin-left: 8%; margin-top: 2%;">
                <div><a href="forgot.php" class="hover active">Forgot Password?</a></div>
            </div>
            <div class="col-xs-3" style="float:right;">
                <input type="submit" name="Submit" class="btn btn-primary" style="background-color: #15B4DE; border-color: #15B4DE;padding-left:25%; padding-right:25%; margin-left: -22%;">
            </div>
            <center><div style="margin-top: 13%; margin-bottom: -5%;">No Account? <a href="signup_1.php" class="hover active">Signup</a></p></div>
        </form>
		    </div>
    </div></div>
    <?php require("includes/footer.php"); ?>
</body>
</html>
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
    <div class="col-xs-6 col-xs-offset-3 login_content" style="border: 2px solid #87CEEB; margin-top: 5.5%; padding-bottom: 50px; color:#000; margin-bottom: 1%;">
            	<center><h6 style="margin-bottom: 30px; margin-top: 20px; color:#a7a6a6">Hello User!<br>Please fill out the form below to get started</h6></center>
            <form method="POST" action="signup_2_submit.php">
                        <div class="form-group">
                            <label for="name" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Name</label>
                            <center><input type="text" class="form-control input-lg" name="name" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="email" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Email</label>
                            <center><input type="text" class="form-control input-lg" name="email" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="password" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Password</label>
                            <center><input type="text" class="form-control input-lg" name="password" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="contact" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Contact</label>
                            <center><input type="number" maxlength="10" class="form-control input-lg" name="contact" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="city" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">City</label>
                            <center><input type="text" class="form-control input-lg" name="city" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
                        <div class="form-group">
                            <label for="address" style="margin-left:14%; background-color: #15B4DE; border-radius: 4px; padding-left:6px; padding-right:6px; margin-bottom: -10px; color: white;font-weight: normal; font-size: 13px;">Address</label>
                            <center><input type="text" class="form-control input-lg" name="address" required = "true" style="border: 2px solid #87CEEB; width:80%;"></center>
                        </div>
            <div class="col-xs-6" style="margin-left: 8%; margin-top: 2%;">
                <p>Already a member? <a href="login_2.php" class="hover active">Login</a></p>
            </div>
            <div class="col-xs-3" style="float:right;">
                <input type="submit" name="Submit" class="btn btn-primary" style="background-color: #15B4DE; border-color: #15B4DE;padding-left:25%; padding-right:25%; margin-left: -31%; margin-top: 4%;">
            </div>
        </form>
		    </div>
    </div></div>
    <?php require("includes/footer.php"); ?>
</body>
</html>
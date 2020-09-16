<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-radius: 0px;">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-family: 'Quicksand', sans-serif;">VIRTUAL POLICESTATION</a>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">  
                    <ul class="nav navbar-nav navbar-right">
               <?php if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "dashboard_1.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-list"></span> DASHBOARD</a></li>
                    <li><a href = "settings.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-cog"></span> SETTINGS</a></li>
                    <li><a href = "logout.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                    <?php
                   } else {
                    ?>
                    <li><a href="signup.php" style="font-family: 'Quicksand', sans-serif;"><span class="glyphicon glyphicon-folder-open"></span> SIGN UP</a></li>
                    <li><a href="login.php" style="font-family: 'Quicksand', sans-serif;"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                    <li><a href = "dashboard_1.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-list"></span> DASHBOARD</a></li>
                        <?php
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </nav>
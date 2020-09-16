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
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-pencil"></span> REPORT A CRIME <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownhover-bottom" role="menu" style="font-family: 'Quicksand', sans-serif;">
                          <li class="dropdown">
                            <a href="#" aria-expanded="true">Personal Crimes <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdownhover-right">
                              <li><a href="form.php?id=6">Assault</a></li>
                              <li><a href="form.php?id=7">Battery</a></li>
                              <li><a href="form.php?id=8">False Imprisonment</a></li>
                              <li><a href="form.php?id=9">Kidnapping</a></li>
                              <li><a href="form.php?id=10">Homicide</a></li>
                              <li><a href="form.php?id=11">Rape</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#">Property Crimes <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="font-family: 'Quicksand', sans-serif;">
                              <li><a href="form.php?id=12">Larceny</a></li>
                              <li><a href="form.php?id=13">Robbery</a></li>
                              <li><a href="form.php?id=14">Burglary</a></li>
                              <li><a href="form.php?id=15">Arson</a></li>
                              <li><a href="form.php?id=16">Embezzlement</a></li>
                              <li><a href="form.php?id=17">Forgery</a></li>
                              <li><a href="form.php?id=18">False pretenses</a></li>
                              <li><a href="form.php?id=19">Receipt of stolen goods</a></li>
                            </ul>
                          </li>
                          <li class="dropdown" style="font-family: 'Quicksand', sans-serif;">
                            <a href="#" style="font-family: 'Quicksand', sans-serif;">Inchoate Crimes <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="font-family: 'Quicksand', sans-serif;">
                              <li><a href="form.php?id=20">Attempt</a></li>
                              <li><a href="form.php?id=21">Solicitation</a></li>
                              <li><a href="form.php?id=22">Conspiracy</a></li>
                            </ul>
                          </li>
                          <li class="dropdown" style="font-family: 'Quicksand', sans-serif;">
                            <a href="#" style="font-family: 'Quicksand', sans-serif;">Statutory Crimes <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="font-family: 'Quicksand', sans-serif;">
                              <li><a href="form.php?id=23">Alcohol-related</a></li>
                              <li><a href="form.php?id=24">Selling alcohol to a minor</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "dashboard.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-list"></span> DASHBOARD</a></li>
                    <li><a href = "helpline.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-headphones"></span> HELPLINE</a></li>
                    <li><a href = "settings.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-cog"></span> SETTINGS</a></li>
                    <li><a href = "logout.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php" style="font-family: 'Quicksand', sans-serif;"><span class="glyphicon glyphicon-folder-open"></span> SIGN UP</a></li>
                    <li><a href="login.php" style="font-family: 'Quicksand', sans-serif;"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                    <li><a href = "dashboard.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-list"></span> DASHBOARD</a></li>
                    <li><a href = "helpline.php" style="font-family: 'Quicksand', sans-serif;"><span class = "glyphicon glyphicon-headphones"></span> HELPLINE</a></li>
                        <?php
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </nav>
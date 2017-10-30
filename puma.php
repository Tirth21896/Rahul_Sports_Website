<!DOCTYPE html>
<?php
    include("general.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUMA</title>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./js/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./js/bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
      <!-- header starting here -->
      <div class="navbar-wrapper" id="heading">
            <div class="container-fluid">
                    <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                              <!-- Brand and toggle get grouped for better mobile display -->
                              <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><b>RAHUL TREADING CO.</b></a>
                                
                              </div>
                          
                              <!-- Collect the nav links, forms, and other content for toggling -->
                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                  <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                                  <li><a href="About-Us.html">About-Us</a></li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipments<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="cricket.html">Cricket</a></li>
                                      <li><a href="swimming.html">Swimming</a></li>
                                      <li><a href="football.html">Football</a></li>
                                      <li role="separator" class="divider"></li>
                                      <li><a href="contactUs.html">Contact-Us</a></li>
                                      <li role="separator" class="divider"></li>
                                      <li><a href="#">Get Directions To Us</a></li>
                                    </ul>
                                  </li>
                                </ul>
                                <form class="navbar-form navbar-right">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                  
                              </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                          </nav>
            </div>
         </div>
    <!-- header part ends here.. -->
     <!-- main body parts starts here.. -->
     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div id="cor-in" class="carousel-inner" role="listbox">
                <div class="item active" style="background-image:url(Images/header_logo.png) ">
                  <!-- <img src="Images/football.jpg" width="100%" alt="Sorry, Image is not available"> -->
                  <div class="carousel-caption">
                   Rahul treading co.
                  </div>
                </div>
                
                
                
              </div>
            
              <!-- Controls -->
              <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>-->
      </div>
      
      <!-- carousel ends here -->
  
      <!-- main body part -->
      <div class="container-fluid" id="bigt">
        <h1><center>PUMA</center></h1>
      </div>
     <!-- footer starts here -->
     <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>© 2017 Rahul Treading Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- footer starts here -->
</body>
</html>
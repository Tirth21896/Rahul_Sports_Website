<?php
function logoHeader(){ ?>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Wrapper for slides -->
            <div id="cor-in" class="carousel-inner" role="listbox">
              <div class="item active" style="background-image:url(Images/header_logo.png) ">
                <div class="carousel-caption">
                 Rahul treading co.
                </div>
              </div>  
            </div>
          </div>
<?php }

function header1() { ?>

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
                            <a class="navbar-brand" href="index.php"><b>RAHUL TREADING CO.</b></a>
                            
                          </div>
                      
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                              <li class="active"><a href="index.php">Home</a></li>
                              <li><a href="About-Us.php">About-Us</a></li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipments<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="cricket.php">Cricket</a></li>
                                  <li><a href="swimming.php">Swimming</a></li>
                                  <li><a href="football.php">Football</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li><a href="contactUs.php">Contact-Us</a></li>
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

<?php }

function footer() { ?>
    <!-- footer starts here -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>© 2017 Rahul Treading Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- footer starts here -->
<?php }

?>

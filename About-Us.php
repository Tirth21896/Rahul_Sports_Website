<!DOCTYPE html>
<?php
    include("general.php");
    
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About-Us</title>
        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./js/bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="./js/bootstrap/css/bootstrap.css"> 
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <!-- header starting here -->
        <?php
         header1();
        ?>
    <!-- header part ends here.. -->
    <!-- carousel starts -->
    <?php
         logoHeader();
    ?>
    <!-- carousel ends here -->

    <!-- main body part -->
    <div class="container-fluid" id="bigt">
      <h1><center>About-Us</center></h1>
    </div>
    <div class="container-fluid" id="bigt">
     <p class="lead">Rahul Treading co. was established in 23rd of march 1988. Since than serving as treader of sporting goods making sporting better for locals. Sporting is engineered here as Experience is biggest asset of human being. Apart from this when it comes to the brand and quality everyting we sell is clearified by the experts. Also we owns biggest community of sporting around locals. Come join us to become a part of it.</p>
    </div>
    

    <div id="big-big-expert" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">The Expert :  <span class="text-muted">Mr.Upendra Patel</span></h2>
          <p class="lead">
              Mr.Upendra Patel is the only founder of Rahul Sports. An experienced "sporting engineer" for more than 30 years. Making sporting better for locals since serving.
            <ul id="upatel">
              <li style="font-size : 18px;">Giving out best price for quality product</li>
              <li style="font-size : 18px;">Provding best customer service on a reasonable reasons.</li>
              <li style="font-size : 18px;">also providing repair service and best of their advice.</li>
            </ul>
          </p>
        </div>
        <div class="col-md-5">
          <img id="expert" class="featurette-image img-responsive center-block img-responsive img-thumbnail" data-src="holder.js/500x500/auto" alt="500x500" src="Images/Expert.jpg" data-holder-rendered="true">
        </div>
      </div>
   
    <hr class="featurette-divider">
    <!-- main body part ends -->
     <!-- footer starts her e -->
     <?php
     footer();
    ?>
    <!-- footer starts here -->
    
    </body>
</html>
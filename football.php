<!DOCTYPE html>
<?php
    include("general.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football</title>
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
    <!-- main body parts starts here.. -->
      <?php
        logoHeader();
      ?>  
    <!-- carousel ends here -->

    <div class="container-fluid" id="bigt">
        <h1><center>Companies We Have.</center></h1>
      </div>

      <hr class="featurette-divider">
      <!-- footer starts her e -->
      <?php
        footer();
      ?>  
      <!-- footer starts here -->
</body>
</html>
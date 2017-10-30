<!DOCTYPE html>
<?php
    include("general.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-Us</title>
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
<!-- carousel starts here -->
        <?php
         logoHeader();
        ?>
    <!-- carousel ends here -->

    <div class="container-fluid" id="bigt">
        <h1><center>Contact Us.</center></h1>
    </div>
    <div class="container-fluid" id="bigt">
        <h2><center>Meet Us...@</center></h2>
        <p class="lead"> #B-22, Trimurti Complex, B/H Bus Stand, Station Road, Nadiad </p>
    </div>
    
    <div class="container-fluid" style="margin-left: 200px; margin-right: 200px;">
            <h3><center>Our working hours are as listed below.</center></h3>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Day</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opening At</th>
                    <th scope="col">Closing At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Monday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Tuesday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Wednesday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Thursday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Friday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Saturday</td>
                    <td>Open</td>
                    <td>09:30AM</td>
                    <td>07:30PM</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Sunday</td>
                    <td>Close</td>
                    <td></td>
                    <td></td>
                </tr>
                    
            </tbody>

        </table>

    </div>

    <hr class="featurette-divider">
    <!-- footer starts her e -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2017 Rahul Treading Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- footer starts here -->
</body>
</html>
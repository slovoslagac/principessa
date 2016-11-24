<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principessa</title>
    <link rel="shortcut icon" href="images/LogoBrownBG-Icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bira pravu sirinu uredjaja -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <!--    <link rel="stylesheet" href="css/bts.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Optional theme -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/principessa.css">
</head>
<body>
<?php
require_once(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

// header included in layout

include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'header.php')));



?>

<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12"><img src="images/najava.jpg" class="img-responsive center-block" alt="Responsive image"></div>
    </div>
</div>

<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
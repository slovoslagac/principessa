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

<div class="container">

    <div class="row">

        <div class="col-xs-12">
            <h1 class="page-header">Principessa</h1>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
            <a title="Slika 1" href="#"><img class="thumbnail img-responsive" src="images/cake1.jpg"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
            <a title="Slika 2" href="#"><img class="thumbnail img-responsive" src="images/cake2.jpg"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
            <a title="Slika 3" href="#"><img class="thumbnail img-responsive" src="images/cake3.jpg"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
            <a title="Slika 4" href="#"><img class="thumbnail img-responsive" src="images/cake4.jpg"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
            <a title="Slika 5" href="#"><img class="thumbnail img-responsive" src="images/cake5.jpg"></a>
        </div>



    </div>

    <hr>
</div>

<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title">Heading</h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/principessa.js">   </script>
</body>
</html>
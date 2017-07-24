<!doctype html>
<html lang="en">
<head>
    <?php
    require_once(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));
    $title = "Principessa";
    include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'head.php')));
    ?>
</head>
<body>
<?php


// header included in layout

include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'header.php')));

?>
<!--main body -->

<div class="container container-fluid ">
    <div class="row offer">
        <h3 class="text-center">Naša ponuda</h3>
        <?php for($x=3; $x<=10; $x++) { ?>
        <div class="col-xs-12 col-sm-6" id="men<?php echo $x?>">
            <img src="images/meni<?php echo $x;?>.jpg" class="img-responsive center-block" alt="Responsive image">
            <br>
        </div>
        <?php } ?>

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
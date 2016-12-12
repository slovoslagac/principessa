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

<div class="uvod container container-fluid">
    <div class="row">
        <div id="map-outer" class="col-md-12">
            <div id="address" class="col-xs-12 col-sm-7 col-md-4">
                <h2>PRINCIPESSA</h2>
                <h2>Posetite nas...</h2>
                    <div class="row">
                        <div class="col-xs-12">Strahinjića Bana 64-66</div>
                        <div class="col-xs-12">Dorćol, Beograd</div>
                        <div class="col-xs-12"><strong><em>Ponedeljak-Nedelja</em></strong></div>
                        <div class="col-xs-12">08:00 - 00:00</div>
                        <div class="col-xs-12"><strong><em>Telefon:</em></strong></div>
                        <div class="col-xs-12">+381(60) 66-44-046</div>


                    </div>

            </div>
            <hr class="visible-xs visible-sm">
            <div id="map-container" class="col-xs-12 col-md-8">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.5119608519485!2d20.462576829263284!3d44.820589949962695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ5JzE0LjEiTiAyMMKwMjcnNDcuMiJF!5e0!3m2!1sen!2srs!4v1480000507301"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <hr>
        </div><!-- /map-outer -->
    </div> <!-- /row -->

    <!--    <div class="row">-->
    <!--        <form class="form-horizontal" name="commentform">-->
    <!--            <div class="form-group">-->
    <!--                <div class="col-md-4">-->
    <!--                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>-->
    <!--                </div>-->
    <!--                <div class="col-md-4">-->
    <!--                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>-->
    <!--                </div>-->
    <!--                <div class="col-md-4 input-group">-->
    <!--                    <span class="input-group-addon">@</span>-->
    <!--                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="form-group">-->
    <!--                <div class="col-md-12">-->
    <!--                    <textarea rows="6" class="form-control" id="comments" name="comments"-->
    <!--                              placeholder="Your question or comment here"></textarea>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="form-group">-->
    <!--                <div class="col-md-6">-->
    <!--                    <button type="submit" value="Submit" class="btn btn-warning pull-right">Send</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </form>-->
    <!--    </div><!-- /row -->
    <hr>
</div><!-- /container -->


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
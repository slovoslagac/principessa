<!doctype html>
<html lang="en">
<style>
    body {
        font-family: Verdana, sans-serif;
        margin: 0;
        padding-top: 0px;
    }

    * {
        box-sizing: border-box;
    }

    .row > .column {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }


    /* The Modal (background) */
    .modal {
        display: none;
        position: absolute;
        z-index: 1;
        margin:auto;
        padding: 5% 10% 10% 10%;
        left: 0;
        top: 0;
        width: 100%;
        /*height: 100%;*/
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        /*background-color: #fefefe;*/
        /*padding: 10%;*/
        /*padding: 0 10% 10% 10%;*/
        margin:auto;
        display: block;
        width: 90%;
        /*height: 100%;*/
        max-width: 1200px;
        z-index: 0;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    }
</style>
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

$podnaslov = "Principessa";
$maxnum = 16;
?>

<div class="container">

    <div class="row" id="gallery">
        <div class="col-xs-12">
            <h1 class="page-header"><?php echo $podnaslov ?></h1>
        </div>
        <?php for ($j = 1; $j <= $maxnum; $j++) {
            if($j>4 and $j < 13 and $podnaslov != 'Kolači') { $podnaslov = 'Kolači'?>
                <div class="col-xs-12">
                    <h1 class="page-header"><?php echo $podnaslov ?></h1>
                </div>

               <?php
            } elseif($j > 12 and $podnaslov != 'Sladoledi') { $podnaslov = 'Sladoledi'?>
                <div class="col-xs-12">
                    <h1 class="page-header"><?php echo $podnaslov ?></h1>
                </div>

                <?php
                }


            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb" onkeypress="closeModal()">
                <img class="thumbnail img-responsive hover-shadow cursor" src="images/gallery/<?php echo "pic$j" ?>.jpg" onclick="openModal();currentSlide(<?php echo $j?>)" >
            </div>
        <?php } ?>
    </div>

</div>

<div id="myModal" class="modal" data-keyboard="true" tabindex="0" >
    <span class="close cursor" onclick="closeModal()">&times;</span>

    <div class="modal-content">

        <?php for ($j = 1; $j <= $maxnum; $j++) { ?>
        <div class="mySlides">
            <div class="numbertext"><?php echo $j ?> / <?php echo $maxnum ?></div>
            <img class="img-responsive center-block" src="images/gallery/<?php echo "pic$j" ?>.jpg" style="width:100%">
        </div>
        <?php } ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>


    </div>
</div>


<!--footer included-->
<?php
include(join(DIRECTORY_SEPARATOR, array(SITE_LAYOUTS, 'footer.php')));

?>
<script src="js/principessa.js"></script>

</body>
</html>
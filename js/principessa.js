/**
 * Created by petar on 22.11.2016.
 */


//$(document).ready(function () {
//    $('li img').on('click', function () {
//        var src = $(this).attr('src');
//        var img = '<img src="' + src + '" class="img-responsive"/>';
//
//        //Start of new code
//        var index = $(this).parent('li').index();
//        console.log(index);
//        var html = '';
//        html += img;
//        html += '<div style="height:25px;clear:both;display:block;">';
//        html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
//        html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
//        html += '</div>';
//        //End of new code
//
//        $('#myModal').modal();
//        $('#myModal').on('shown.bs.modal', function () {
//            $('#myModal .modal-body').html(img);
//        });
//        $('#myModal').on('hidden.bs.modal', function () {
//            $('#myModal .modal-body').html('');
//        });
//    });
//});


//
//$(document).ready(function () {
//    $('.thumbnail').click(function () {
//        $('.modal-body').empty();
//        var title = $(this).parent('a').attr("title");
//        $('.modal-title').html(title);
//        $($(this).parents('div').html()).appendTo('.modal-body');
//        $('#myModal').modal({show: true});
//        var link = $('.modal-body a');
//        var numberPic = parseInt(link.attr('title').match(/\d+/));
//        console.log(numberPic);
//    });
//
//});
//$(document).ready(function () {
//    $('#next-btn').click(function () {
//        var link = $('.modal-body a');
//        var number = parseInt(link.attr('title').match(/\d+/));
//        var str = link.attr('title')
//        var name = str.substr(0,str.indexOf(number));
//        number++;
//        if (number === 5) {
//            number = 1;
//        }
//        var imgname = name + number + '.jpg' ;
//        var test = $('.modal-body').html($('#img-container').find('a[title=imgname]').parent('div').html());
//        $('.modal-body').html($('#img-container').find('a[title="' + name + number +'+ .jpg"').parent('div').html());
//        $('.modal-title').text(name + number);
//        //console.log(number+' '+link+' '+link.attr('title')+' '+name+ ' ' + imgname );
//        console.log(test);
//    });
//});
//
//$('#prev-btn').click(function () {
//    var link = $('.modal-body a');
//    var number = parseInt(link.attr('title').match(/\S+$/));
//    number--;
//    if (number === 0) {
//        number = 12;
//    }
//    $('.modal-body').html($('#img-container').find('a[title="Image ' + number + '"]').parent('div').html());
//    $('.modal-title').text('Image ' + number);
//});



function openModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";
    captionText.innerHTML = dots[slideIndex-1].alt;
};

window.onkeypress = function( event ) {
    //if ( event.keyCode == 27 ) {
        console.log(event.keyCode);
    //}
};

//window.onkeydown = function( event ) {
//    if ( event.keyCode == 27 ) {
//        window.close();
//        document.getElementsByClassName("").style.display = "none";
//    }
//};
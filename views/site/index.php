<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

    <div class="welcome">
        <h1>
            <strong id="welcome">
                WELCOME BAFAZI SAFARI TOURS
            </strong>
        </h1>
    </div>

    <div class="about">
        <p>
            <strong id="about">
                Bafazi was born with the idea of sharing  Africas heritage with the rest of the world through our Tours,to achieve sustainable and enviromentaly friendly tourism ,to guarantee employment for local women,we are begining to take few Steps, and the easiest aproach  has been to start with Transfer services and guides safaris led by Dominique khoza,a born leader with more than 10 Years of experience as a Guide through the Kruger Trails,we continue to update and develop our project everyday,we will use the Network to update you on our progress 
            </strong>
        </p>

        <div id="carrusel">
            <a href="#" class="left-arrow"><img src="<?= Yii::$app->request->baseUrl ?>/left-arrow.png" /></a>
            <a href="#" class="right-arrow"><img src="<?= Yii::$app->request->baseUrl ?>/right-arrow.png" /></a>
            <div class="carrusel">
                <div class="product" id="product_0">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/241100525_143247261310831_1424105373259421820_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=730e14&_nc_ohc=l9Cf0dfSDq4AX8Z7uXz&_nc_ht=scontent-mad1-1.xx&oh=2b85867d5b0e1446423c3ceb0d3395b5&oe=61984706" class="fotos-carrusel" />
                </div>
                <div class="product" id="product_1">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/237898015_137047141930843_6478423186469005769_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_ohc=0xbYPrfocXMAX9_Y__d&_nc_ht=scontent-mad1-1.xx&oh=aa7bead7bcbaa3548475c14bd23676af&oe=61969BFA" class="fotos-carrusel" />

                </div>
                <div class="product" id="product_2">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/234184808_133103368991887_3444618563127518576_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_ohc=UPno-ywEUTgAX8lEZad&_nc_ht=scontent-mad1-1.xx&oh=a2128c17ee8d35c6271649930d7859c9&oe=6197CDAE" class="fotos-carrusel" />

                </div>
                <div class="product" id="product_3">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/235998767_135063518795872_3206488131694279096_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_ohc=X9zUMOv8_z4AX-fsHDu&_nc_ht=scontent-mad1-1.xx&oh=7dadfcab23edbf75029080cd77beb908&oe=6196D45F" class="fotos-carrusel" />

                </div>
                <div class="product" id="product_4">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/240814990_141081098194114_5025358682177716916_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_ohc=dYLl0sDqEvYAX_oZaN7&_nc_ht=scontent-mad1-1.xx&oh=c97c239a43dcbf0dd438d89dc8f5ae7f&oe=61967BFE" class="fotos-carrusel" />
                </div>
                <div class="product" id="product_5">
                    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/237084810_135722922063265_5578346025038401364_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=973b4a&_nc_ohc=hjHoZF-3zLAAX8M71vJ&_nc_ht=scontent-mad1-1.xx&oh=d6da0dfa11fbab0e83c3bad20e3575be&oe=619715ED" class="fotos-carrusel" />

                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });
</script>
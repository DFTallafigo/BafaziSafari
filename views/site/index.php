<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

    <div class="welcome">
        <h1>
            <strong id="welcome">
                WELCOME BAFAZI SAFARI TOURS
            </strong>
        </h1>
    </div>

    <div>
        <section id="container-slider">	
            <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
                <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                <li><a itlist="itList_1" href="#"></a></li>
                <li><a itlist="itList_2" href="#"></a></li>
                <li><a itlist="itList_3" href="#"></a></li>
                <li><a itlist="itList_4" href="#"></a></li>
            </ul>
            <ul id="slider">
                <li style="background-image: url(../images/632A0038.jpg); z-index:0; opacity: 1;">
                </li>
                <li style="background-image: url(../images/632A9802.jpg); ">
                </li>
                <li style="background-image: url(../images/_29I9127.jpg); ">
                </li>
                <li style="background-image: url(../images/_29I8460.jpg); ">
                </li>
                <li style="background-image: url(../images/_29I6627.jpg); ">
                </li>
            </ul>
        </section>
    </div>

<script>
    if(document.querySelector('#container-slider')){
   setInterval('fntExecuteSlide("next")',5000);
}
//------------------------------ LIST SLIDER -------------------------
if(document.querySelector('.listslider')){
   let link = document.querySelectorAll(".listslider li a");
   link.forEach(function(link) {
      link.addEventListener('click', function(e){
         e.preventDefault();
         let item = this.getAttribute('itlist');
         let arrItem = item.split("_");
         fntExecuteSlide(arrItem[1]);
         return false;
      });
    });
}

function fntExecuteSlide(side){
    let parentTarget = document.getElementById('slider');
    let elements = parentTarget.getElementsByTagName('li');
    let curElement, nextElement;

    for(var i=0; i<elements.length;i++){

        if(elements[i].style.opacity==1){
            curElement = i;
            break;
        }
    }
    if(side == 'prev' || side == 'next'){

        if(side=="prev"){
            nextElement = (curElement == 0)?elements.length -1:curElement -1;
        }else{
            nextElement = (curElement == elements.length -1)?0:curElement +1;
        }
    }else{
        nextElement = side;
        side = (curElement > nextElement)?'prev':'next';

    }
    //RESALTA LOS PUNTOS
    let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
    elementSel[curElement].classList.remove("item-select-slid");
    elementSel[nextElement].classList.add("item-select-slid");
    elements[curElement].style.opacity=0;
    elements[curElement].style.zIndex =0;
    elements[nextElement].style.opacity=1;
    elements[nextElement].style.zIndex =1;
}
</script>
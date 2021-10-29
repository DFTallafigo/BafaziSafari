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

    <div class="about">
        <p>
            <strong id="about">
                Bafazi Safari tours was born with the idea of sharing Africa's heritage with the rest of the world trough our tours, to achieve sustainable and environmentally friendly tourism, and to guarantee employment for local women. We are beginning to take a few steps, and the easiest approach has been to start with transfer services and guides safaris led by Dominique Khoza, a born leader with more than 10 years of experience  as a guide trough the Kruger trails. We continue to update and develop our project everyday and we will use the Network to update you on our progress.
            </strong>
        </p>
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
                <li style="background-image: url('https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/240814990_141081098194114_5025358682177716916_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=973b4a&_nc_ohc=gEUAcNczsTsAX96u6sj&_nc_ht=scontent-mad1-1.xx&oh=001a3e40dd6e3a7d24a40b5c294713a2&oe=619E64FE'); z-index:0; opacity: 1;">
                </li>
                <li style="background-image: url('https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/241048691_143693407932883_752807054112337743_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=973b4a&_nc_ohc=BDf0eW1bJRwAX_wZrEH&_nc_ht=scontent-mad1-1.xx&oh=4758a252a357a1d6c3a66a0618fd11f0&oe=619D7FCE'); ">
                </li>
                <li style="background-image: url('https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/237898015_137047141930843_6478423186469005769_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=973b4a&_nc_ohc=cB2hj9BAL98AX-z9Urp&_nc_ht=scontent-mad1-1.xx&oh=0b20fe432a0b28af27295b9c07aa5d14&oe=619E84FA'); ">
                </li>
                <li style="background-image: url('https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/241102607_144355371200020_2476592774338333185_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=973b4a&_nc_ohc=QVuuf-vRXs8AX8mlU6T&_nc_ht=scontent-mad1-1.xx&oh=a126751f5105b6e726113a39bb0c7ea9&oe=61A0800A'); ">
                </li>
                <li style="background-image: url('https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/241100525_143247261310831_1424105373259421820_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=973b4a&_nc_ohc=4lNpr2bONpIAX_b8Rh1&_nc_ht=scontent-mad1-1.xx&oh=a19f6aec21db1b756cd174d690ad7903&oe=61A03006'); ">
                </li>
            </ul>
        </section>
    </div>

    <div class="container sub-footer">
        <div class="row" id="sub-footer">
            <div class="col-6 localizacion">
                <h5>
                    <strong>OUR LOCATION</strong>    
                </h5>
                <p>
                    R538 (7849,58 km) <br>
                    Hoedspruit, South Africa
                </p>
                <p>
                    Bafazi Safari & Tours, 178, Moose Rd, Hoedspruit, 1380
                </p>
            </div>
            <div class="col-6 shortcuts">
                <h5>
                    <strong>SHORTCUTS</strong>    
                </h5>
                <ul id="shortcuts">
                    <a href="<?= Url::toRoute('site/index', true); ?>">
                        <li>Home</li>
                    </a>
                    <a href="<?= Url::toRoute('site/about', true); ?>">
                        <li>About</li>
                    </a>
                    <a href="<?= Url::toRoute('site/contact', true); ?>">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </div>
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
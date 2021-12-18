<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="about-us">

    </div>

    <div class="row">
        <div class="col-12">
            <h1 id="welcome">
                <strong>
                    ABOUT US
                </strong>
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 about">
                <p>
                    <strong>
                        Bafazi Safari tours was born with the idea of sharing Africa's heritage with the rest of the world trough our tours, to achieve sustainable and environmentally friendly tourism, and to guarantee employment for local women. We are beginning to take a few steps, and the easiest approach has been to start with transfer services and guides safaris led by Dominique Khoza, a born leader with more than 10 years of experience  as a guide trough the Kruger trails. We continue to update and develop our project everyday and we will use the Network to update you on our progress.
                    </strong>
                </p>
            </div>
            <div class="col-12">
                <h4 id="welcome">
                    <strong>
                        SERVICES WE DO
                    </strong>
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="../images/_29I6270.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">TRANSFERS</h5>
                        <p class="card-text">
                            We offer transfer services from Airports to and from Lodges and hotels,we cover the following airports:
                        </p>
                        <ul>
                            <li class="card-list">Tambo internacional airport</li>
                            <li class="card-list">Kruger mpumalanga internacional airport</li>
                            <li class="card-list">Eastgate airport</li>
                            <li class="card-list">Skukuza airport</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="../images/632A9253.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">GAME RESERVES</h5>
                        <ul>
                            <li class="card-list">Sabie sands</li>
                            <li class="card-list">Timbavati</li>
                            <li class="card-list">Balule</li>
                            <li class="card-list">Karongwe</li>
                            <li class="card-list">
                                <a href="<?= Url::toRoute('site/kruger', true); ?>">Kruger National park</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


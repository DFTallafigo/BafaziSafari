<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="about-us">

    </div>

    <div class="container sub-footer">
        <div class="row" id="sub-footer">
            <div class="col-sm localizacion">
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
            <div class="col-sm shortcuts">
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
            <div class="col-sm">
                <p>tercero</p>
            </div>
        </div>
    </div>
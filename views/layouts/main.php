<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title = 'Bafazi Safari Tours') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <img src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/172256016_132671652203805_1794731425059087933_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=973b4a&_nc_ohc=jmKUGX9kH2MAX8m3Fqv&_nc_ht=scontent-mad1-1.xx&oh=41cde73212275399edab2cf6c1e9364f&oe=61847AC6" alt="" id="logo">
    <div class="contact">
        <a href="https://www.facebook.com/Bafazi-Safari-Tours-106959518272939/">
            <img src="<?= Yii::$app->request->baseUrl ?>/facebook-white.png" id="facebook">
        </a>
        <a href="https://www.instagram.com/bafazisafaris/">
            <img src="<?= Yii::$app->request->baseUrl ?>/instagram.png" id="instagram">
        </a>
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => ' ',
        'brandUrl' => '',
        'options' => [
            'class' => 'navbar-dark bg-dark navbar-expand-md',
        ],
        'collapseOptions' => [
            'class' => 'justify-content-center',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="principal">
        <?= $content ?>
    </div>

<footer class="footer">
        <p class="float-left">Bafazi Safari Tours &copy; <?= date('Y') ?></p>

        <p class="float-right"><?= Yii::powered() ?></p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

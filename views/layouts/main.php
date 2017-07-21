<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'Alabs';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="menu">
    <a href="#main" class="active"><i class="fa fa-circle " aria-hidden="true" ></i></a>
    <a href="#about">  <i class="fa fa-circle" aria-hidden="true" ></i></a>
    <a href="#products">  <i class="fa fa-circle" aria-hidden="true" ></i></a>
    <a href="#equipment"> <i class="fa fa-circle" aria-hidden="true" ></i></a>
    <a href="#more"><i class="fa fa-circle" aria-hidden="true" ></i></a>
</div>
<?= $content ?>
<footer>
    <div class="footer_icons">
        <i class="fa fa-vk" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
    </div>
    <span>@kvrzh 2017</span>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

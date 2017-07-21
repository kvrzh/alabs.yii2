<?php
    use yii\helpers\Html;
?>
<div class="block" id="main">
    <div class="main-info wow fadeInDown">
        <?= Html::img('@web/web/img/logo.png') ?>
        <h1>AeroLabs</h1>
        <p>Немножко современности и уюта в Ваш дом</p>
        <a href="#about">О нас</a>
        <a href="#products">Галерея</a>
        <div class="socials">
            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="countdown countdown-container container wow fadeInDown"
         data-start="1362139200"
         data-end="1517265578"
         data-now="1507165578"
         data-border-width="3"
         data-border-color="rgba(243, 156, 18, 1)">
        <h2>Успей сделать свой дом уютнее и современнее по скидочной цене</h2>
        <div class="clock row">
            <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-days" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val">0</p>
                            <p class="type-days type-time">DAYS</p>
                        </div><!-- /.text -->
                    </div><!-- /.inner -->
                </div><!-- /.wrap -->
            </div><!-- /.clock-item -->

            <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-hours" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val">0</p>
                            <p class="type-hours type-time">HOURS</p>
                        </div><!-- /.text -->
                    </div><!-- /.inner -->
                </div><!-- /.wrap -->
            </div><!-- /.clock-item -->

            <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-minutes" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val">0</p>
                            <p class="type-minutes type-time">MINUTES</p>
                        </div><!-- /.text -->
                    </div><!-- /.inner -->
                </div><!-- /.wrap -->
            </div><!-- /.clock-item -->

            <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                <div class="wrap">
                    <div class="inner">
                        <div id="canvas-seconds" class="clock-canvas"></div>

                        <div class="text">
                            <p class="val">0</p>
                            <p class="type-seconds type-time">SECONDS</p>
                        </div><!-- /.text -->
                    </div><!-- /.inner -->
                </div><!-- /.wrap -->
            </div><!-- /.clock-item -->
        </div><!-- /.clock -->
        <a href="#">Узнать подробнее</a>
    </div><!-- /.countdown-wrapper -->
</div>
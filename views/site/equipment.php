<?php
    use yii\helpers\Html;
?>
<div class="block" id="equipment">
    <div class="container">
        <div class="equipment-info">
            <h3 class="wow fadeIn" data-wow-duration="1s">Комплектация "чудо"-вазона</h3>
            <small class="wow fadeIn" data-wow-duration="1s">Ниже предоставлена схема коробки и ее составляющих</small>
            <div class="equipment">
            <ul>
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.05s"><i data-number="1">1</i>
                    <h4>База</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.1s"><i data-number="2">2</i>
                    <h4>Горшок</h4>
                    <p>Vestibulum nec rutrum purus.</p>
                </li>
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.15s"><i data-number="3">3</i>
                    <h4>Адаптер</h4>
                    <p>Nam malesuada ex id molestie pretium. </p>
                </li>
            </ul>
            <div class="equipment-img wow fadeIn" data-wow-duration="1s" data-wow-delay="0.35s">
                <i class="first-column" data-number="1">1</i>
                <i class="second-column" data-number="2">2</i>
                <i class="second-column" data-number="3">3</i>
                <i class="third-column" data-number="4">4</i>
                <i class="third-column" data-number="5">5</i>
                <i class="third-column" data-number="6">6</i>
                <?= Html::img('@web/web/img/box_orange.png') ?>
            </div>
            <ul class="fa-ul">
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.2s"><i data-number="4">4</i>
                    <h4>Грунт</h4>
                    <p>Fusce vestibulum facilisis leo vitae ultricies. </p>
                </li>
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.25s"><i data-number="5">5</i>
                    <h4>Агроперлит</h4>
                    <p>Vestibulum at faucibus libero. </p>
                </li>
                <li class="wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s"><i data-number="6">6</i>
                    <h4>Мох-сфагнум</h4>
                    <p>Proin sed ipsum finibus, pellentesque nulla at, elementum nibh.</p>
                </li>
            </ul>
            </div>

        </div>

    </div>
</div>
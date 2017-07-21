<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\widgets\Pjax;
?>
<div class="block" id="more">
    <h1 class="wow fadeIn" data-wow-duration="1s">А что если?</h1>
    <span class="wow fadeIn" data-wow-duration="1s">Если Вам не приглянулась ни одна модель, но вы желаете приобрести себе данный продукт - мы с удовольствием сделаем Вам индивидуально на заказ</span>
    <div class="container">
        <div class="more-form-info wow bounceIn" data-wow-duration="0.5s">
            <?php $form = ActiveForm::begin(['action' => 'site/send']); ?>
            <?= $form->field($model, 'name',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите имя','name' => 'name']]); ?>
            <?= $form->field($model, 'phone',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите телефон', 'name' => 'phone']]); ?>
            <?= $form->field($model, 'email',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите email', 'name' => 'email']])->input('email'); ?>
            <?= $form->field($model, 'description',['template' => '{input}{hint}{error}','inputOptions' =>['value'=> 'Введите текст', 'name' => 'description']])->textarea(); ?>
            <span class="result"></span>
            <?= Html::submitInput('Отправить') ?>
            <?php ActiveForm::end() ?>
            <b class="wow bounceIn" data-wow-delay="0.1s" data-wow-duration="0.5s">или</b>
            <div class="wow bounceIn moreForm-phones" data-wow-delay="0.2s" data-wow-duration="0.5s">
                <h3>Свяжитесь с нами самостоятельно</h3>
                <ul class="fa-ul">
                    <li><i class="fa fa-li fa-phone" aria-hidden="true"></i>
                        +38(050)014-22-52</li>
                    <li><i class="fa fa-li fa-phone" aria-hidden="true"></i>
                        +38(099)373-42-66</li>
                    <li><i class="fa fa-li fa-envelope-o" aria-hidden="true"></i>kovr-anton@mail.ru</li>
                    <li><i class="fa fa-li fa-instagram" aria-hidden="true"></i>kvrzh</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--<form>
    <h3>Оставьте свои данные и мы свяжемся с Вами по email:</h3>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="email" name="email" placeholder="Email">
    <textarea name="description">Описание</textarea>
    <input type="button"  value="Отправить">
</form>-->
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="block" id="products">
    <h1 class="wow fadeIn" data-wow-duration="2s">Осталось только выбрать</h1>
    <span class="wow fadeIn" data-wow-duration="2s">Maecenas tortor lectus, imperdiet et ex vel, sollicitudin mattis purus. Maecenas ornare eu mi sollicitudin
        finibus.</span>
    <div class="container">
        <div class="products">
            <?php $i = 0;
                    $names = [];
            ?>
            <?php foreach ($products as $product): ?>
            <?php $names[$product['name']] = $product['name'] ?>
            <?php if ($i % 2 == 0): ?>
            <div class="product wow rotateInUpLeft" data-wow-duration="0.75s">
                <?php else: ?>
                <div class="product wow rotateInUpRight reverse" data-wow-duration="0.75s">
                    <?php endif; ?>
                    <div class="product-image">
                        <?= Html::img("@web/web/img/gallery/" . $product['name'] . "/" . $product['colors'][0]['color_name'] . '.jpg') ?>
                    </div>
                    <div class="product-info">
                        <h3><?= $product['name'] ?></h3>
                        <div class="colors">
                            <?php foreach ($product['colors'] as $color): ?>
                                <?php
                                    $colors[$color['color_name']] = $color['color_name'];
                                ?>
                                <i class="fa fa-circle" aria-hidden="true" data-color="<?= $color['color_name'] ?>"
                                   style="color:<?= $color['hex']; ?>"></i>
                            <?php endforeach; ?>
                        </div>
                        <span><?= $product['description'] ?></span>
                        <input type="hidden" value="<?= $product['id'] ?>">
                        <button>Заказать</button>
                    </div>
                </div>
                <?php $i++ ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="popup">
    <div class="popup-feedback">
        <h3>Сделать заказ</h3>
            <?php $form = ActiveForm::begin(['action' => 'site/send']); ?>
            <?= $form->field($modelProduct, 'name',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите имя','name' => 'name']]); ?>
            <?= $form->field($modelProduct, 'phone',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите телефон', 'name' => 'phone']]); ?>
            <?= $form->field($modelProduct, 'email',['template' => '{input}{hint}{error}','inputOptions' =>['placeholder'=> 'Введите email', 'name' => 'email']])->input('email'); ?>
            <div class="popup-selection">
                <?= $form->field($modelProduct, 'model', ['template' => '{input}','inputOptions' => ['name' => 'model', 'id' => 'model']])->dropDownList($names) ?>
                <?= $form->field($modelProduct, 'color', ['template' => '{input}','inputOptions' => ['name' => 'color', 'id' => 'color']])->dropDownList($colors) ?>
            </div>
            <span class="result"></span>
            <?= Html::submitInput('Отправить',['id' => 'button']) ?>
            <?php ActiveForm::end(); ?>
    </div>
</div>
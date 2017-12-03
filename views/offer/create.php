<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var app\models\Offer $model */
/** @var ActiveForm $form */
?>
    <h1> Create new offer</h1>

<?php
    $form = ActiveForm::begin(['id'=> 'offer-form', 'options'=>['class'=> 'form-horizontal']]);
?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="offer-description">Description</label>
        <div class="col-sm-10">
            <?= $form->field($model, 'description')->textarea(['class' => 'form-control', 'name' => 'offer-description'])->label(false)?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="offer-price">Price</label>
        <div class="col-sm-10">
            <?= $form->field($model, 'price')->textInput(['class' => 'form-control', 'name' => 'offer-price'])->label(false) ?>
        </div>
    </div>
<?php
    ActiveForm::end();
?>
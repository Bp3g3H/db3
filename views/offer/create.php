<?php

use yii\widgets\ActiveForm;
/** @var app\models\Offer $model */
/** @var ActiveForm $form */
?>
<div class="col-md-2"></div>
<div class="col-md-8">
    <h1> Create new offer</h1>
    <h4 class="h4-create"><small>Offer info</small></h4>
    <hr class="hr-create">
<?php
    $form = ActiveForm::begin(['id'=> 'offer-form', 'options'=>['class'=> 'form-horizontal']]);
?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="offer-title">Offer title</label>
        <div class="col-sm-10">
            <?= $form->field($model, 'title')->textInput(['class' => 'form-control', 'name' => 'offer-title'])->label(false)?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="offer-category">Offer title</label>
        <div class="col-sm-10">
            <?= $form->field($model, 'category')->dropDownList($model->getOfferCategoryArr(), ['class' => 'form-control', 'name' => 'offer-category'])->label(false)?>
        </div>
    </div>
    <hr>
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
</div>
<div class="col-md-2"></div>

<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StageRental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stage-rental-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'number_participants')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'rows' => 6]) ?>
    <? //= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'form_date')->widget(DatePicker::className(), [
                'clientOptions' => [
                    'defaultDate' => date('Y-m-d')
                ],
                'dateFormat' => 'yyyy-MM-dd',
                'language' => 'ru',
                'options' => [
                    'class' => 'form-control'
                ]
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'form_time')->dropDownList(array_combine($model->listTimes(),$model->listTimes()), ['prompt' => '']); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'form_end_date')->widget(DatePicker::className(), [
                'clientOptions' => [
                    'defaultDate' => date('Y-m-d')
                ],
                'dateFormat' => 'yyyy-MM-dd',
                'language' => 'ru',
                'options' => [
                    'class' => 'form-control'
                ]
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'form_end_time')->dropDownList(array_combine($model->listTimes(),$model->listTimes()), ['prompt' => '']); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'status')->dropDownList($model->listStatuses()); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Обновить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

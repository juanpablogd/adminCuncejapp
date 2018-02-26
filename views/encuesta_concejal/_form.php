<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encuesta-concejal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'respuesta_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto_opcional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encuesta-concejal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'respuesta_1') ?>

    <?= $form->field($model, 'respuesta_2') ?>

    <?= $form->field($model, 'respuesta_3') ?>

    <?= $form->field($model, 'respuesta_4') ?>

    <?php // echo $form->field($model, 'respuesta_5') ?>

    <?php // echo $form->field($model, 'respuesta_6') ?>

    <?php // echo $form->field($model, 'respuesta_7') ?>

    <?php // echo $form->field($model, 'respuesta_8') ?>

    <?php // echo $form->field($model, 'respuesta_9') ?>

    <?php // echo $form->field($model, 'respuesta_10') ?>

    <?php // echo $form->field($model, 'respuesta_11') ?>

    <?php // echo $form->field($model, 'respuesta_12') ?>

    <?php // echo $form->field($model, 'respuesta_13') ?>

    <?php // echo $form->field($model, 'texto_opcional') ?>

    <?php // echo $form->field($model, 'cedula') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

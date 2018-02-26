<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\concejalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concejal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'apellidos') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'cargo') ?>

    <?= $form->field($model, 'cedula') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'correo_electronico') ?>

    <?php // echo $form->field($model, 'municipio') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'escolaridad') ?>

    <?php // echo $form->field($model, 'orden') ?>

    <?php // echo $form->field($model, 'clave') ?>

    <?php // echo $form->field($model, 'id_tipousuario') ?>

    <?php // echo $form->field($model, 'dt_registro') ?>

    <?php // echo $form->field($model, 'dt_actualizacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

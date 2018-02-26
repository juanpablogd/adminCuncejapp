<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\normatividadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="normatividad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'num') ?>

    <?= $form->field($model, 'epigrafe') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'claves') ?>

    <?php // echo $form->field($model, 'ley') ?>

    <?php // echo $form->field($model, 'orden') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

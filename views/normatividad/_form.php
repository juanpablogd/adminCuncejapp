<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\normatividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="normatividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'epigrafe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claves')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ley')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orden')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'ACTO LEGISLATIVO' => 'ACTO LEGISLATIVO', 'ACUERDO' => 'ACUERDO', 'COMUNICADO' => 'COMUNICADO', 'CONCEPTO' => 'CONCEPTO', 'CONSTITUCION' => 'CONSTITUCION', 'DECRETO' => 'DECRETO', 'EXPEDIENTE' => 'EXPEDIENTE', 'LEY' => 'LEY', 'ORDENANZA' => 'ORDENANZA', 'PROVIDENCIA' => 'PROVIDENCIA', 'RADICADO' => 'RADICADO', 'RESOLUCION' => 'RESOLUCION', 'SENTENCIA' => 'SENTENCIA', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

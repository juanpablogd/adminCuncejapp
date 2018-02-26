<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tiposusuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tiposusuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'desc_tipousuario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

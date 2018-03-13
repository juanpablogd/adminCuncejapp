<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\concejal;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */
/* @var $form yii\widgets\ActiveForm */
$dataOrden = [
    "1" => "1",
    "2" => "2",
    "3" => "3",
    "4" => "4",
    "5" => "5",
];
?>

<div class="encuesta-concejal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'cedula')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(concejal::find()->orderBy(['cedula'=>SORT_ASC])->all(),'cedula','fullName'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un concejal ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?php
        echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'fecha_sis',
            'options' => ['placeholder' => 'Seleccione Fecha ...'],
            'form' => $form,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'respuesta_1')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione de 1 a 5 ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'respuesta_2')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione de 1 a 5 ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'respuesta_3')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione de 1 a 5 ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'respuesta_4')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione de 1 a 5 ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'texto_opcional')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

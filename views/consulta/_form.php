<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\concejal;
use kartik\date\DatePicker;

$dataTipo = [
    "CORREO" => "CORREO",
    "CELULAR" => "CELULAR",
    "TELEFONO" => "TELEFONO",
];

/* @var $this yii\web\View */
/* @var $model app\models\consulta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulta-form">

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

    <?= $form->field($model, 'consulta')->textarea(['rows' => '5']) ?>

<?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha',
        'options' => ['placeholder' => 'Seleccione Fecha...'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'tipo')->widget(Select2::classname(), [
            'data' => $dataTipo,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione el medio de consulta ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

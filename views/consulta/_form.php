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

$dataProfesional = [
    "JOSE GABRIEL FERNANDEZ CIFUENTES" => "JOSE GABRIEL FERNANDEZ CIFUENTES",
    "HERNAN ROGELIO GARZON SANCHEZ" => "HERNAN ROGELIO GARZON SANCHEZ",
    "LUIS HERNANDO VANEGAS CEDIEL" => "LUIS HERNANDO VANEGAS CEDIEL",
    "HENRY MAURICIO FLOREZ  SEGURA" => "HENRY MAURICIO FLOREZ  SEGURA",
    "WILSON LEONARDO REY ROMERO" => "WILSON LEONARDO REY ROMERO",
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

    <?=
        $form->field($model, 'fecha')->widget(DatePicker::className(),[
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'removeButton' => ['icon' => 'trash'],
                'pickerButton' => false,
                'options' => ['placeholder' => 'Seleccione Fecha...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                    'todayHighlight' => true,
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

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'atentido_por')->widget(Select2::classname(), [
            'data' => $dataProfesional,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione el profesional que atendió la consulta ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?=
        $form->field($model, 'fecha_atencion')->widget(DatePicker::className(),[
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'removeButton' => ['icon' => 'trash'],
                'pickerButton' => false,
                'options' => ['placeholder' => 'Seleccione Fecha de atención...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                    'todayHighlight' => true,
                ]
        ]);
    ?>

    <?= $form->field($model, 'resumen_respuesta')->textarea(['rows' => '5']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

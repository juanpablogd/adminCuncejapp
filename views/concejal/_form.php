<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\municipio;
$dataEscolaridad = [
    "Primaria" => "Primaria",
    "Bachiller" => "Bachiller",
    "Técnico" => "Técnico",
    "Tecnólogo" => "Tecnólogo",
    "Profesional" => "Profesional",
    "Profesional Especializado" => "Profesional Especializado",
];

$dataOrden = [
    "1" => "1",
    "2" => "2",
    "3" => "3",
    "4" => "4",
    "5" => "5",
];

$dataTipo = [   "CONCEJAL" => "CONCEJAL",
                "EXTERNO" => "EXTERNO",
                "GOBERNACION" => "GOBERNACION",
                "PRESIDENTE(A)" => "PRESIDENTE(A)",
                "SECRETARIA GENERAL" => "SECRETARIA GENERAL",
                "SECRETARIA" => "SECRETARIA",
                "SECRETARIO(A) APOYO " => "SECRETARIO(A) APOYO ",
                "SECRETARIO(A) CONCEJO" => "SECRETARIO(A) CONCEJO",
                "SECRETARIO(A) ENCARGADA" => "SECRETARIO(A) ENCARGADA",
                "SECRETARIO(A) EXTERNO" => "SECRETARIO(A) EXTERNO",
                "VICEPRESIDENTE(A) 1" => "VICEPRESIDENTE(A) 1",
                "VICEPRESIDENTE(A) 2" => "VICEPRESIDENTE(A) 2" ];
?>

<div class="concejal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->dropDownList($dataTipo , ['prompt' => '']) ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'municipio')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(municipio::find()->orderBy(['nombre_mun'=>SORT_ASC])->all(),'nombre_mun','nombre_mun'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un municipio ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>
    
    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'escolaridad')->widget(Select2::classname(), [
            'data' => $dataEscolaridad,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un grado de escolaridad ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'orden')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione el orden en el listado ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

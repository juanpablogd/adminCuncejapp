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
/* @var $this yii\web\View */
/* @var $model app\models\diputado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diputado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'partido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biografia')->textarea(['rows' => '5']) ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'municipio_origen')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(municipio::find()->orderBy(['nombre_mun'=>SORT_ASC])->all(),'nombre_mun','nombre_mun'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un municipio ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'gestion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'votacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comision')->textarea(['rows' => '4']) ?>

    <?= $form->field($model, 'redes_sociales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList([ 'M' => 'M', 'F' => 'F', ], ['prompt' => '']) ?>

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

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

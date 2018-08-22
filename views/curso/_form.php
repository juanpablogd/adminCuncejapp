<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\curso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>
    
    <?=
        $form->field($model, 'fecha_inscripcion')->widget(DatePicker::className(),[
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'removeButton' => ['icon' => 'trash'],
                'pickerButton' => false,
                'options' => ['placeholder' => 'Seleccione Fecha de inscripción...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                    'todayHighlight' => true,
                ]
        ]);
    ?>

    <?=
        $form->field($model, 'fecha_inicio')->widget(DatePicker::className(),[
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'removeButton' => ['icon' => 'trash'],
                'pickerButton' => false,
                'options' => ['placeholder' => 'Seleccione Fecha de inicio...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                    'todayHighlight' => true,
                ]
        ]);
    ?>

    <?= $form->field($model, 'modalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dirigido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'limite_cupos')->textInput() ?>

    <?= $form->field($model, 'metodologia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conferencistas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prioridad')->textInput() ?>

    <?= $form->field($model, 'web')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipocurso')->dropDownList([ 'Formal' => 'Formal', 'cursoESAP' => 'CursoESAP', 'cursoGob' => 'CursoGob', 'pregradoESAP' => 'pregradoESAP', 'posgradoESAP' => 'posgradoESAP', 'Convocatoria' => 'Convocatoria' , 'diplomadoRosario' => 'diplomadoRosario' ], ['prompt' => '']) ?>

    <?= $form->field($model, 'activo')->dropDownList([ 'SI' => 'SI', 'NO' => 'NO', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

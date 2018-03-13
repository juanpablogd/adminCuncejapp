<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\concejal;
use app\models\curso;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\curso_inscripcion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-inscripcion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_curso')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(curso::find()->Where(['=', 'activo', 'SI'])->orderBy(['titulo'=>SORT_ASC])->all(),'id','titulo'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione un curso ...'],
            'pluginOptions' => [
                'allowClear' => true
            ]
        ]); 
    ?>

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
            'attribute' => 'fecha_inscripcion',
            'options' => ['placeholder' => 'Seleccione Fecha inscripción...'],
            'form' => $form,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose' => true,
            ]
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

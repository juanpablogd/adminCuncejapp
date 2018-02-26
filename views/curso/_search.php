<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cursoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'institucion') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'fecha_inicio') ?>

    <?= $form->field($model, 'modalidad') ?>

    <?php // echo $form->field($model, 'horario') ?>

    <?php // echo $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'dirigido') ?>

    <?php // echo $form->field($model, 'objetivo') ?>

    <?php // echo $form->field($model, 'metodologia') ?>

    <?php // echo $form->field($model, 'conferencistas') ?>

    <?php // echo $form->field($model, 'certificacion') ?>

    <?php // echo $form->field($model, 'prioridad') ?>

    <?php // echo $form->field($model, 'web') ?>

    <?php // echo $form->field($model, 'url_imagen') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <?php // echo $form->field($model, 'tipocurso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

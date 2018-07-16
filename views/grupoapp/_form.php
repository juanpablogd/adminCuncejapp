<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\grupoapp */
/* @var $form yii\widgets\ActiveForm */

$dataOrden = [
    "SI" => "SI",
    "NO" => "NO",
];
?>

<div class="grupoapp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'descripcion')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'activo')->widget(Select2::classname(), [
            'data' => $dataOrden,
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione el orden el estado ...'],
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

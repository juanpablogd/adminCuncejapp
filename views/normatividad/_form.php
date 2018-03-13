<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\normatividad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="normatividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'epigrafe')->textarea(['rows' => '4']) ?>

    <?= $form->field($model, 'fecha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claves')->textarea(['rows' => '4']) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'ACTO LEGISLATIVO' => 'ACTO LEGISLATIVO', 'ACUERDO' => 'ACUERDO', 'COMUNICADO' => 'COMUNICADO', 'CONCEPTO' => 'CONCEPTO', 'CONSTITUCION' => 'CONSTITUCION', 'DECRETO' => 'DECRETO', 'EXPEDIENTE' => 'EXPEDIENTE', 'LEY' => 'LEY', 'ORDENANZA' => 'ORDENANZA', 'PROVIDENCIA' => 'PROVIDENCIA', 'RADICADO' => 'RADICADO', 'RESOLUCION' => 'RESOLUCION', 'SENTENCIA' => 'SENTENCIA', ], ['prompt' => 'Tipo de Norma']) ?>

    <?= $form->field($model, 'categoria')->dropDownList([ 'PROCESO DE APOYO' => 'PROCESO DE APOYO', 'PROCESO DE CONTROL' => 'PROCESO DE CONTROL', 'PROCESO ESTRATEGICO' => 'PROCESO ESTRATEGICO', 'PROCESO MISIONAL' => 'PROCESO MISIONAL' ], ['prompt' => 'Categoria']) ?>

    <?= $form->field($model, 'subcategoria')->dropDownList([ 'AGROPECUARIO' => 'AGROPECUARIO' , 'ATENCION Y PREVENCION DE DESASTRES' => 'ATENCION Y PREVENCION DE DESASTRES' , 'CIENCIA. TECNOLOGIA E INFORMACION' => 'CIENCIA. TECNOLOGIA E INFORMACION' , 'CONTADURIA' => 'CONTADURIA' , 'CONTRALORIA' => 'CONTRALORIA' , 'CONTRATACION' => 'CONTRATACION' , 'CONTROL INTERNO' => 'CONTROL INTERNO' , 'CULTURA' => 'CULTURA' , 'EDUCACION' => 'EDUCACION' , 'EMPLEO' => 'EMPLEO' , 'FISCALIA' => 'FISCALIA' , 'FORTALECIMIENTO INSTITUCIONAL' => 'FORTALECIMIENTO INSTITUCIONAL' , 'GRUPOS VULNERABLES' => 'GRUPOS VULNERABLES' , 'INFRAESTRUCTURA Y EQUIPAMIENTO' => 'INFRAESTRUCTURA Y EQUIPAMIENTO' , 'JUSTICIA' => 'JUSTICIA' , 'MEDIO AMBIENTE' => 'MEDIO AMBIENTE' , 'MINAS Y ENERGIA' => 'MINAS Y ENERGIA' , 'PARTICIPACION DEL DESARROLLO COMUNITARIO Y PARTICIPACION CIUDADANA' => 'PARTICIPACION DEL DESARROLLO COMUNITARIO Y PARTICIPACION CIUDADANA' , 'PAZ Y POSCONFLICTO' => 'PAZ Y POSCONFLICTO' , 'PLAN DE ORDENAMIENTO TERRITORIAL' => 'PLAN DE ORDENAMIENTO TERRITORIAL' , 'PLANEACION' => 'PLANEACION' , 'PLANES DE DESARROLLO' => 'PLANES DE DESARROLLO' , 'PLANES INDICATIVOS' => 'PLANES INDICATIVOS' , 'PRESUPUESTO Y FINANZAS' => 'PRESUPUESTO Y FINANZAS' , 'PROCESO DE DESARROLLO ECONOMICO' => 'PROCESO DE DESARROLLO ECONOMICO' , 'PROCURADURIA' => 'PROCURADURIA' , 'PROMOCION DE DESARROLLO ECONOMICO' => 'PROMOCION DE DESARROLLO ECONOMICO' , 'PROMOCION DEL DESARROLLO COMUNITARIO  Y PARTICIPACION CIUDADANA' => 'PROMOCION DEL DESARROLLO COMUNITARIO  Y PARTICIPACION CIUDADANA' , 'PROMOCION DEL DESARROLLO ECONOMICO' => 'PROMOCION DEL DESARROLLO ECONOMICO' , 'RECREACION Y DEPORTE' => 'RECREACION Y DEPORTE' , 'SALUD' => 'SALUD' , 'SANEAMIENTO BASICO Y AGUA POTABLE' => 'SANEAMIENTO BASICO Y AGUA POTABLE' , 'SEGURIDAD. CONVIVENCIA Y ORDEN PUBLICO' => 'SEGURIDAD. CONVIVENCIA Y ORDEN PUBLICO' , 'TRANSPORTE' => 'TRANSPORTE' , 'VIVIENDA' => 'VIVIENDA' ], ['prompt' => 'Subcategoria']) ?>
    
    <?= $form->field($model, 'orden')->dropDownList([ '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', ], ['prompt' => 'Orden en la aplicación']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

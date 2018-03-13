<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */

$this->title = 'Actualizar Encuesta Concejal: '.$model->cedula;
$this->params['breadcrumbs'][] = ['label' => 'Encuesta Concejales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="encuesta-concejal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

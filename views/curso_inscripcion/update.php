<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\curso_inscripcion */

$this->title = 'Update Curso Inscripcion: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Curso Inscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curso-inscripcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

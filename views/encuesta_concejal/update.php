<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */

$this->title = 'Update Encuesta Concejal: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Encuesta Concejals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encuesta-concejal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

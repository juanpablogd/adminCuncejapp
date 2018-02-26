<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\diputado */

$this->title = 'Update Diputado: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Diputados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diputado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
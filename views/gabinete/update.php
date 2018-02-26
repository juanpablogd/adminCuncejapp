<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\gabinete */

$this->title = 'Update Gabinete: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Gabinetes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gabinete-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tiposusuario */

$this->title = 'Update Tiposusuario: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tiposusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipousuario, 'url' => ['view', 'id' => $model->id_tipousuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiposusuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

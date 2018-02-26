<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\concejal */

$this->title = 'Actualizar Concejal:'.$model->nombres . " " . $model->apellidos;;
$this->params['breadcrumbs'][] = ['label' => 'Concejales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="concejal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

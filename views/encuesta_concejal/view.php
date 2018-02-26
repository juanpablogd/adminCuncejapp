<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Encuesta Concejals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-concejal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'respuesta_1',
            'respuesta_2',
            'respuesta_3',
            'respuesta_4',
            'respuesta_5',
            'respuesta_6',
            'respuesta_7',
            'respuesta_8',
            'respuesta_9',
            'respuesta_10',
            'respuesta_11',
            'respuesta_12',
            'respuesta_13',
            'texto_opcional',
            'cedula',
        ],
    ]) ?>

</div>

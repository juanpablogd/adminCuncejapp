<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\concejal */

$this->title = $model->nombres . " " . $model->apellidos;
$this->params['breadcrumbs'][] = ['label' => 'Concejales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concejal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea eliminar el registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'apellidos',
            'nombres',
            'cargo',
            'cedula',
            'telefono',
            'correo_electronico',
            'municipio',
            'provincia',
            'escolaridad',
            'orden',
            'dt_registro',
            'dt_actualizacion',
        ],
    ]) ?>

</div>

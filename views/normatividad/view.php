<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\normatividad */

$this->title = $model->num;
$this->params['breadcrumbs'][] = ['label' => 'Normatividad', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="normatividad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'num',
            'epigrafe',
            'fecha',
            [
                'label' => 'url',
                'format' => 'raw',
                'attribute'=>'url',
                'value' => function($model) {
                    return Html::a('pdf',$model->fullUrl,['target' => '_blank','class' => 'testClass']) ;
                },
            ],
            'claves',
            'categoria',
            'subcategoria',
            'tipo',
            'orden',
        ],
    ]) ?>

</div>

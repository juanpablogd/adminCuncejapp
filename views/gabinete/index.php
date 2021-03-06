<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\gabineteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gabinete';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['site/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gabinete-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Gabinete', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'cargo',
            'nombre',
            //'detalle',
            'telefono',
            //'telefono2',
            'correo',
            //'resumen',
            //'orden',
            //'activo',
            //'genero',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

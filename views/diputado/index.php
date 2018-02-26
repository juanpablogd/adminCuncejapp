<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\diputadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diputados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diputado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Diputado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'partido',
            'telefono',
            'correo',
            //'telefono2',
            //'cargo',
            //'orden',
            //'biografia',
            //'municipio_origen',
            //'gestion',
            //'votacion',
            //'comision',
            //'redes_sociales',
            //'facebook',
            //'twitter',
            //'url:url',
            //'genero',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

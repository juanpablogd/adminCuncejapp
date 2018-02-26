<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\consultaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consultas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Consulta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'cedula',
            [
                 'label' => 'Nombre',
                 'format' => 'ntext',
                 'attribute'=>'nombres',
                 'value' => function($model) {
                     return $model->idCcConcejal['nombres'];
                 },
            ],
            [
                 'label' => 'Apellidos',
                 'format' => 'ntext',
                 'attribute'=>'apellidos',
                 'value' => function($model) {
                     return $model->idCcConcejal['apellidos'];
                 },
            ],
            'consulta',
            'fecha',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

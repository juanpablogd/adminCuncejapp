<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\models\consultaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consultas';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['site/admin']];
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
                'label' => 'Nombres',
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
            [   'attribute' => 'fecha',
                'value' => 'fecha',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'name' => 'fecha',
                            'attribute' => 'fecha',
                            'options' => ['placeholder' => 'Seleccione Fecha...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose' => true,
                            ]
                        ]),
            ],
            'tipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

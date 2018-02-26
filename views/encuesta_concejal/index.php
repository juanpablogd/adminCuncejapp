<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\encuesta_concejalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encuesta Concejals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-concejal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Encuesta Concejal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'respuesta_1',
            'respuesta_2',
            'respuesta_3',
            'respuesta_4',
            //'respuesta_5',
            //'respuesta_6',
            //'respuesta_7',
            //'respuesta_8',
            //'respuesta_9',
            //'respuesta_10',
            //'respuesta_11',
            //'respuesta_12',
            //'respuesta_13',
            //'texto_opcional',
            //'cedula',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

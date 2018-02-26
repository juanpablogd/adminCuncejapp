<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tiposusuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tiposusuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposusuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tiposusuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipousuario',
            'desc_tipousuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

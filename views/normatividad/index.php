<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Yii::setAlias('@nomurl', 'http://saga.cundinamarca.gov.co/SIG/data/doc/cuncejapp/normatividad/');
/* @var $this yii\web\View */
/* @var $searchModel app\models\normatividadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Normatividad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="normatividad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Normatividad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
            //'claves',
            //'ley',
            //'orden',
            //'tipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

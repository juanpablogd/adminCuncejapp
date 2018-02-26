<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\concejalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concejales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concejal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Concejal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'apellidos',
            'nombres',
            //'cargo',
            'cedula',
            'telefono',
            'correo_electronico',
            'municipio',
            //'provincia',
            //'escolaridad',
            //'orden',
            //'clave',
            //'id_tipousuario',
            //'dt_registro',
            //'dt_actualizacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

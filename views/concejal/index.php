<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\concejalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concejales';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['site/admin']];
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            'apellidos',
            'nombres',
            'cedula',
            'telefono',
            'correo_electronico',
            'municipio',
            'provincia',
            'cargo',
            'escolaridad',
            ['class' => 'yii\grid\ActionColumn'],
        ];


?>
<div class="concejal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Concejal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= 
        ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns,
            'fontAwesome' => true,
            'dropdownOptions' => [
                'label' => 'Exportar',
                'class' => 'btn btn-default'
            ]
        ])."\n".
            GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $gridColumns,
        ]); 
    ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\curso_inscripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Curso Inscripcions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-inscripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Curso Inscripcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_curso',
            'cedula',
            'fecha_inscripcion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\curso_inscripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inscripciones Educación';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['site/admin']];
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
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
            [
                'label' => 'Teléfono',
                'format' => 'ntext',
                'attribute'=>'telefono',
                'value' => function($model) {
                    return $model->idCcConcejal['telefono'];
                },
            ],
            [
                'label' => 'Título',
                'format' => 'ntext',
                'attribute'=>'titulo',
                'value' => function($model) {
                    return $model->idCurso['titulo'];
                },
            ],
            [   'attribute' => 'fecha_inscripcion',
                'value' => 'fecha_inscripcion',
                'format' => 'raw',
                'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'name' => 'fecha_inscripcion',
                            'attribute' => 'fecha_inscripcion',
                            'options' => ['placeholder' => 'Seleccione Fecha...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose' => true,
                            ]
                        ]),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ];

?>
<div class="curso-inscripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar inscripción a Curso', ['create'], ['class' => 'btn btn-success']) ?>
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

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\curso_inscripcion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inscripciones a Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-inscripcion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
                'label' => 'Título',
                'format' => 'ntext',
                'attribute'=>'titulo',
                'value' => function($model) {
                    return $model->idCurso['titulo'];
                },
            ],
            'fecha_inscripcion',
        ],
    ]) ?>

</div>

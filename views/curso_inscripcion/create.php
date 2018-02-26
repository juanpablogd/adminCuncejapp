<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\curso_inscripcion */

$this->title = 'Create Curso Inscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Curso Inscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-inscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

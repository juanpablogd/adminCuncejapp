<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\encuesta_concejal */

$this->title = 'Crear Encuesta Concejal';
$this->params['breadcrumbs'][] = ['label' => 'Encuestas Concejales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-concejal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

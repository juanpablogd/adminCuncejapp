<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\concejal */

$this->title = 'Crear Concejal';
$this->params['breadcrumbs'][] = ['label' => 'Concejales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concejal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

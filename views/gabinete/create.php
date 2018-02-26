<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\gabinete */

$this->title = 'Create Gabinete';
$this->params['breadcrumbs'][] = ['label' => 'Gabinetes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gabinete-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

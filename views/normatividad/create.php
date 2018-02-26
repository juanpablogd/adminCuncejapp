<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\normatividad */

$this->title = 'Create Normatividad';
$this->params['breadcrumbs'][] = ['label' => 'Normatividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="normatividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

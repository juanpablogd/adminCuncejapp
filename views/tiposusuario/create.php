<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tiposusuario */

$this->title = 'Create Tiposusuario';
$this->params['breadcrumbs'][] = ['label' => 'Tiposusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposusuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

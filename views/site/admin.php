<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Administrador de información';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="vertical-menu">
        	<a href="index.php?r=concejal/index" class="list-group-item">Concejal</a>
			<a href="index.php?r=gabinete/index" class="list-group-item">Gabinete</a>
			<a href="index.php?r=diputado/index" class="list-group-item">Diputado</a><br>

			<a href="index.php?r=consulta/index" class="list-group-item">Consulta</a>
			<a href="index.php?r=curso_inscripcion/index" class="list-group-item">Preinscripciones de Cursos</a>
			<a href="index.php?r=encuesta_concejal/index" class="list-group-item">Encuestas concejales</a><br>

			<a href="index.php?r=normatividad/index" class="list-group-item">Normatividad</a>
			<a href="index.php?r=pregunta/index" class="list-group-item">Preguntas frecuentes</a>
			<a href="index.php?r=tips/index" class="list-group-item">Tips</a><br>

			<a href="index.php?r=curso/index" class="list-group-item">Cursos y Estudios</a>

		</div>
    </p>

</div>

<?php
/* @var $this CrewController */
/* @var $model Crew */

$this->breadcrumbs=array(
	'Crews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Crew', 'url'=>array('index')),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>

<div class="container">
<div class="hero-unit" >

<h1>Create Crew</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
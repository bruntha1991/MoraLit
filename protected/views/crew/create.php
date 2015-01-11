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
<h1>Create Crew</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
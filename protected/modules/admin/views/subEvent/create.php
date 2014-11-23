<?php
/* @var $this SubEventController */
/* @var $model SubEvent */

$this->breadcrumbs=array(
	'Sub Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubEvent', 'url'=>array('index')),
	array('label'=>'Manage SubEvent', 'url'=>array('admin')),
);
?>

<h1>Create SubEvent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
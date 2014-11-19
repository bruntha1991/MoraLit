<?php
/* @var $this CrewController */
/* @var $model Crew */

$this->breadcrumbs=array(
	'Crews'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Crew', 'url'=>array('index')),
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'View Crew', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>

<h1>Update Crew <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
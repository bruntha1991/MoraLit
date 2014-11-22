<?php
/* @var $this CrewController */
/* @var $model Crew */

$this->breadcrumbs=array(
	'Crews'=>array('index'),
	$model->crew_id=>array('view','id'=>$model->crew_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Crew', 'url'=>array('index')),
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'View Crew', 'url'=>array('view', 'id'=>$model->crew_id)),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>

<h1>Update Crew <?php echo $model->crew_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
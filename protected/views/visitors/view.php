<?php
/* @var $this VisitorsController */
/* @var $model Visitors */

$this->breadcrumbs=array(
	'Visitors'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List Visitors', 'url'=>array('index')),
	array('label'=>'Create Visitors', 'url'=>array('create')),
	array('label'=>'Update Visitors', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete Visitors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitors', 'url'=>array('admin')),
);
?>

<h1>View Visitors #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'first_name',
		'last_name',
		'mail',
	),
)); ?>

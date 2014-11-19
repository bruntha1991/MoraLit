<?php
/* @var $this AdminsController */
/* @var $model Admins */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List Admins', 'url'=>array('index')),
	array('label'=>'Create Admins', 'url'=>array('create')),
	array('label'=>'Update Admins', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete Admins', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Admins', 'url'=>array('admin')),
);
?>

<h1>View Admins #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'firstname',
		'lastname',
		'contactNo',
		'mail',
		'faculty',
		'image',
	),
)); ?>

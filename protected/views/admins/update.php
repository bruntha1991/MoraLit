<?php
/* @var $this AdminsController */
/* @var $model Admins */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
	array('label'=>'List Admins', 'url'=>array('index')),
	array('label'=>'Create Admins', 'url'=>array('create')),
	array('label'=>'View Admins', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Manage Admins', 'url'=>array('admin')),
);
?>

<h1>Update Admins <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
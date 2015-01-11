<?php
/* @var $this SubEventController */
/* @var $model SubEvent */

$this->breadcrumbs=array(
	'Sub Events'=>array('index'),
	$model->name=>array('view','id'=>$model->sub_event_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubEvent', 'url'=>array('index')),
	array('label'=>'Create SubEvent', 'url'=>array('create')),
	array('label'=>'View SubEvent', 'url'=>array('view', 'id'=>$model->sub_event_id)),
	array('label'=>'Manage SubEvent', 'url'=>array('admin')),
);
?>

<h1>Update SubEvent <?php echo $model->sub_event_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
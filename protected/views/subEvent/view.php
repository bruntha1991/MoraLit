<?php
/* @var $this SubEventController */
/* @var $model SubEvent */

$this->breadcrumbs=array(
	'Sub Events'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SubEvent', 'url'=>array('index')),
	array('label'=>'Create SubEvent', 'url'=>array('create')),
	array('label'=>'Update SubEvent', 'url'=>array('update', 'id'=>$model->sub_event_id)),
	array('label'=>'Delete SubEvent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sub_event_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubEvent', 'url'=>array('admin')),
);
?>

<h1>View SubEvent #<?php echo $model->sub_event_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sub_event_id',
		'event_id',
		'name',
		'date',
		'time',
		'description',
		'image',
	),
)); ?>

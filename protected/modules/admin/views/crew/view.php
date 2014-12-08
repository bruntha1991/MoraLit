<?php
/* @var $this CrewController */
/* @var $model Crew */
$this->breadcrumbs=array(
	'Crews'=>array('index'),
	$model->crew_id,
);
$this->menu=array(
	array('label'=>'List Crew', 'url'=>array('index')),
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'Update Crew', 'url'=>array('update', 'id'=>$model->crew_id)),
	array('label'=>'Delete Crew', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->crew_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>

<h1>View Crew #<?php echo $model->crew_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'crew_id',
		'first_name',
		'last_name',
		'faculty',
		'year',
		'designation',
		'contact_no',
		'email',
		'image',
	),
)); ?>
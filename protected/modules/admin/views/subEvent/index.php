<?php
/* @var $this SubEventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Events',
);

$this->menu=array(
	array('label'=>'Create SubEvent', 'url'=>array('create')),
	array('label'=>'Manage SubEvent', 'url'=>array('admin')),
);
?>

<h1>Sub Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

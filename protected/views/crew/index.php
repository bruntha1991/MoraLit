<?php
/* @var $this CrewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Crews',
);

$this->menu=array(
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>
<div class="container">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
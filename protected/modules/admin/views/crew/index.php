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
        <h1>Crews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
        
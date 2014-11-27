<?php
/* @var $this BlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blogs',
);

$this->menu=array(
	array('label'=>'Create Blog', 'url'=>array('create')),
	array('label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<div class="container">

    <div class="span8">

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

    </div>
</div>

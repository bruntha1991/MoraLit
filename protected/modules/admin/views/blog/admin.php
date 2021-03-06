<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Blog', 'url'=>array('index')),
	array('label'=>'Create Blog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#blog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div style="position: absolute; top:65px">
<h1>Manage Blogs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none; position: relative; left: 30px">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div style="width: 960px">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'blog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'blog_id',
		'title',
		'user_id',
		'content',
		'date',
		'time',
		/*
		'image',
		'no_of_views',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div>
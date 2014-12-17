<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Blog', 'url'=>array('index')),
	array('label'=>'Create Blog', 'url'=>array('create')),
	array('label'=>'Update Blog', 'url'=>array('update', 'id'=>$model->blog_id)),
	array('label'=>'Delete Blog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->blog_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<h1>View Blog #<?php echo $model->blog_id; ?></h1>
<div rowspan="5" style="width: 100px">
    <?php
        $imghtml= CHtml::image("assets/blog/".$model->image);
        echo CHtml::link($imghtml, array('view', 'id'=>$model->blog_id));
    ?> 
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'blog_id',
		'title',
		'user_id',
		'content',
		'date',
		'time',
		'no_of_views',
	),
)); ?>

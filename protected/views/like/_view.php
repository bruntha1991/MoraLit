<?php
/* @var $this LikeController */
/* @var $data Like */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('like_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->like_id), array('view', 'id'=>$data->like_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_id')); ?>:</b>
	<?php echo CHtml::encode($data->blog_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>
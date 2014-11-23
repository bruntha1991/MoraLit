<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->photo_id), array('view', 'id'=>$data->photo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_event_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />


</div>
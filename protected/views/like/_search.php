<?php
/* @var $this LikeController */
/* @var $model Like */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'like_id'); ?>
		<?php echo $form->textField($model,'like_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_id'); ?>
		<?php echo $form->textField($model,'blog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
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



<div class="span6">
    <h1>View Crew #<?php echo $model->crew_id; ?></h1>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="control-group">
		<?php echo $form->labelEx($model,'username',array('class'=>'control-label','label'=>'Email')); ?>
		<div class="controls"><?php echo $form->textField($model,'username',array('placeholder'=>'Enter your email')); ?>
		<?php echo $form->error($model,'username'); ?></div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->passwordField($model,'password',array('placeholder'=>'Enter Password')); ?>
		<?php echo $form->error($model,'password'); ?></div>
		
	</div>

	<div class="checkbox">
           <div class="controls"> <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?></div>
        </div>
	
        
        
		<div class="controls"><a href=<?php echo $this->createUrl('user/forgotpassword') ?>>Forgot password?</a></div><br/>
	<div class="controls"><?php echo CHtml::submitButton('Sign in',array('class'=>'button button-news')); ?></div>
        </div>


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

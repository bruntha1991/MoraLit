<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootbox.min.js', CClientScript::POS_HEAD);

?>

<div class="container">
<h3 class="master_heading">Sign in</h3>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array(
                          'class'=>'form-horizontal form-control',
                          'role'=>'form'
                        )
));
    
        if (Yii::app()->user->getState('account')== 'TRUE'){
            ?>  <script type="text/javascript">bootbox.alert("Registration successfull");</script>
            
            <?php
            Yii::app()->user->setState('account', 'FALSE'); 
        }


?>
    <div class="span6">
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

<!--	<div class="row buttons">-->
		<?php //echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
<!--	</div>-->

<?php $this->endWidget(); ?>

</div>

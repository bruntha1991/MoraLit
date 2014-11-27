<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array(
        'class' => 'form-horizontal form-control',
        'role' => 'form'
    )
        ));
?>
<div class="well">


<div class="container">
    <div class="span2"></div>
    <div class="span8">
        <h3 class="master_heading">Create User</h3>
        <div class="well">
        <div class="control-group">
            <?php echo $form->labelEx($model, 'user_id', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'user_id', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'USER_ID', 'class' => 'span5')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'username',array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'username', array('size' => 45, 'maxlength' => 45 ,'placeholder' => '', 'class' => 'span5')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'firstname'); ?>
            <?php echo $form->textField($model, 'firstname', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'firstname'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'lastname'); ?>
            <?php echo $form->textField($model, 'lastname', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'lastname'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'phone_number'); ?>
            <?php echo $form->textField($model, 'phone_number', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'phone_number'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'user_type'); ?>
            <?php echo $form->textField($model, 'user_type', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'user_type'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'faculty'); ?>
            <?php echo $form->textField($model, 'faculty', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'faculty'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'last_login_date'); ?>
            <?php echo $form->textField($model, 'last_login_date'); ?>
            <?php echo $form->error($model, 'last_login_date'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'last_login_time'); ?>
            <?php echo $form->textField($model, 'last_login_time'); ?>
            <?php echo $form->error($model, 'last_login_time'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this->endWidget(); ?>
        </div>

    </div><!-- form -->
</div>
</div>
<?php
/* @var $this CrewController */
/* @var $model Crew */
/* @var $form CActiveForm */
?>
    

<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'crew-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
    ?>

<div class="form">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

        
        <table class="table table-striped table-bordered" style="width:80%;">
            <col width="240">
            <col width="130">
	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'first_name'); ?></td>
            <td><?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?></td>
		<?php echo $form->error($model,'first_name'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'last_name'); ?></td>
            <td><?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?></td>
		<?php echo $form->error($model,'last_name'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'faculty'); ?></td>
           
                <td><?php $data = array('','Engineering','Architecture','Information Technology','National Diploma in Technology');
                echo $form->dropDownList($model,'faculty',array_combine($data, $data)); ?></td>
		<?php echo $form->error($model,'faculty'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'year'); ?></td>
            <td><?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?></td>
            
		<?php echo $form->error($model,'year'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'designation'); ?></td>
		<td><?php $data = array('','President','Vice-President','Secretary',
                    'Vice-Secretary','Treasurer','Editor','Web-Coordinator','Representative');
                echo $form->dropDownList($model,'designation',array_combine($data, $data)); ?></td>
		<?php echo $form->error($model,'designation'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'contact_no'); ?></td>
            <td><?php echo $form->textField($model,'contact_no',array('size'=>10,'maxlength'=>10)); ?></td>
		<?php echo $form->error($model,'contact_no'); ?>
            </tr>
	</div>

	<div class="row">
            <tr>
            <td><?php echo $form->labelEx($model,'email'); ?></td>
            <td><?php echo $form->emailField($model,'email'); ?></td>
		<?php echo $form->error($model,'email'); ?>
            </tr>
	</div>
        <div class="row">
            <tr>
            <td><?php echo $form->labelEx($model, 'image'); ?></td>
            <td><?php echo CHtml::activeFileField($model, 'image'); ?>  </td>
        <?php echo $form->error($model, 'image'); ?>
            </tr>            
        </div>
        <div class="row buttons">
            <tr>
                <td colspan="3"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
            </tr>
	</div>
                
        </table>

<?php $this->endWidget(); ?>

</div>
    <!-- form -->
    

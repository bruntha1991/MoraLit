<?php
/* @var $this CrewController */
/* @var $model Crew */
/* @var $form CActiveForm */
?>
    

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'crew-form',
    'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>


    <div class="container">
        <div class="span2"></div>
        <div class="span9">
           <p class="note">Fields with <span class="required">*</span> are required.</p>
           
           <div class="well">
               <div class="control-group">
                   <?php echo $form->textFieldRow($model,'first_name'); ?>
               </div>
               
               <div class="control-group">
                   <?php echo $form->textFieldRow($model,'last_name'); ?>
               </div>
               
               <div class="control-group">
                   <div class="control-label">
                        <?php echo $form->labelEx($model,'faculty'); ?>
                   </div>
                   <div class="controls">
                   <?php $data = array('','Engineering','Architecture','Information Technology','National Diploma in Technology');
                echo $form->dropDownList($model,'faculty',array_combine($data, $data)); ?></td>
                   </div>
               </div>
               
               <div class="control-group">
                   <?php echo $form->textFieldRow($model,'year',array('size'=>4,'maxlength'=>4)); ?>
               </div>
               
               <div class="control-group">
                   <div class="control-label">
                   <?php echo $form->labelEx($model,'designation'); ?>
                   </div>    
                   <div class="controls">
                   <?php $data = array('','President','Vice-President','Secretary',
                    'Vice-Secretary','Treasurer','Editor','Web-Coordinator','Representative');
                echo $form->dropDownList($model,'designation',array_combine($data, $data)); ?>
                   </div>
               </div>
               
               <div class="control-group">
                   <?php echo $form->textFieldRow($model,'contact_no',array('size'=>10,'maxlength'=>10)); ?>
               </div>
               
               <div class="control-group">
                   <?php echo $form->emailField($model,'email'); ?>
               </div>
               
               <div class="control-group">
                   <?php echo CHtml::activeFileField($model, 'image'); ?>
               </div>
               
           </div>

        <div class="controls">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>
            <br /><br /><br />

    <?php $this->endWidget(); ?>
        </div>
    </div><!-- form -->

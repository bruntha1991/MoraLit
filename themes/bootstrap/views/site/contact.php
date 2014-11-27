<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('contact'),
    ));
    ?>

<?php else: ?>

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'contact-form',
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>

    <div class="container">
        <div class="span2"></div>
        <div class="span8">
            <h3 class="master_heading">Contact Us</h3>

            <p>
                If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
            </p>
            <p class="note">Fields with <span class="required">*</span> are required.</p>

            
            <?php //echo $form->errorSummary($model); ?>
            
            <div class="well">

              <div class="control-group"><?php echo $form->textFieldRow($model, 'name'); ?></div>

            <div class="control-group"><?php echo $form->textFieldRow($model, 'email'); ?></div>

            <div class="control-group"><?php echo $form->textFieldRow($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?></div>

            <div class="control-group"><?php echo $form->textAreaRow($model, 'body', array('rows' => 6, 'class' => 'span8')); ?></div>

            <div class="control-group"><?php if (CCaptcha::checkRequirements()): ?>
        <?php
        echo $form->captchaRow($model, 'verifyCode', array(
            'hint' => 'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
        ));
        ?>
                <?php endif; ?></div>
            
            </div>

            
    <?php
    //$this->widget('bootstrap.widgets.TbButton',array(
    //'buttonType'=>'submit',
    //'type'=>'primary',
    //'label'=>'Submit',
    //)); 
    ?>
            
                <div class="controls">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo CHtml::submitButton('Submit', array('class' => 'button button-news')); ?>
                </div>
            <br /><br /><br />

    <?php $this->endWidget(); ?>
        </div>
    </div><!-- form -->

<?php endif; ?>
</div>
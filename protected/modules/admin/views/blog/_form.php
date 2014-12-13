<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php


$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'question-form',
    'enableAjaxValidation' => false,
//        'enableClientValidation'=>true,
//	'clientOptions'=>array(
//		'validateOnSubmit'=>true,
//	),
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>


<div class="span1"></div>
<div class="span11">
    <h3 class="master_heading">Create your News</h3>
    <div class="well">
        <div class="control-group">
            <?php echo $form->labelEx($model, 'title', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 100)); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'user_id', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'user_id'); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <!--        <div class="control-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'col-sm-2 control-label')); ?>
        <?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'content'); ?>
                </div>-->

        <div class="control-group">
            <?php echo $form->textAreaRow($model, 'content', array('rows' => 15, 'cols' => 50, 'class' => 'span8')); ?>

            <div class="control-group">
                <input type="hidden" id="update_ff" name="update_ff" value="CREATE" />
            </div>
            <div class="control-group"> 
                <?php //echo $form->textAreaRow($model, 'question_text', array('rows' => 15, 'cols' => 50, 'class' => 'span8'));  ?>
            </div>

            <div class="control-group"> 
                <div id ="answer-rows" >
                    <?php //$this->renderpartial('_single_answers');   ?>
                </div>
            </div>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'date', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'date'); ?>
            <?php echo $form->error($model, 'date'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'time', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'time'); ?>
            <?php echo $form->error($model, 'time'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'image', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'image', array('size' => 45, 'maxlength' => 45)); ?>
            <?php echo $form->error($model, 'image'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'no_of_views', array('class' => 'col-sm-2 control-label')); ?>
            <?php echo $form->textField($model, 'no_of_views', array('size' => 10, 'maxlength' => 10)); ?>
            <?php echo $form->error($model, 'no_of_views'); ?>
        </div>

        <div class="control-group">
            <div class="controls">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>


<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
<!--<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>-->
<script>

    tinymce.init({
        selector: "textarea",
        theme: "modern",
        width: 1000,
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor jbimages"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image jbimages | print preview media fullpage | forecolor backcolor emoticons",
        relative_urls: false,
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]


    });
</script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/ajax_validation/ajaxvalidation.js"></script>



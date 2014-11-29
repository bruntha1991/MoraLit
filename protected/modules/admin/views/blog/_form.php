<?php
/* @var $this BlogController */
/* @var $model Blog */
/* @var $form CActiveForm */
?>

<?php
//Yii::app()->session['drag_drop_typeb_session'] = array();

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



<div class="container">
    <div class="row">
        <div class="span3">
            <div class="control-group">
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'blog_id'); ?>
        <?php echo $form->textField($model, 'blog_id'); ?>
        <?php echo $form->error($model, 'blog_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'user_id'); ?>
        <?php echo $form->textField($model, 'user_id'); ?>
        <?php echo $form->error($model, 'user_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->textAreaRow($model, 'content', array('rows' => 15, 'cols' => 50, 'class' => 'span10')); ?>
           <div class="control-group">
            <input type="hidden" id="update_ff" name="update_ff" value="CREATE" />
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'date'); ?>
        <?php echo $form->textField($model, 'date'); ?>
        <?php echo $form->error($model, 'date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'time'); ?>
        <?php echo $form->textField($model, 'time'); ?>
        <?php echo $form->error($model, 'time'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'image'); ?>
        <?php echo $form->textField($model, 'image', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'image'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'no_of_views'); ?>
        <?php echo $form->textField($model, 'no_of_views', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'no_of_views'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
<!--<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>-->
<script>

    tinymce.init({
        selector: "textarea",
        theme: "modern",
        width: 800,
        height: 250,
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
<script>
    $(function () {

        // Setup form validation on the #register-form element
        $("#question-form").validate({
            // Specify the validation rules
            rules: {
                course_id: "required",
                level_id: "required",
                subject_id: "required",
                "Question[subject_area_id]": "required",
                "Question[number_of_marks]": "required",
                "Question[question_text]": "required",
                question_type: "required"




            },
            // Specify the validation error messages
            messages: {
                course_id: "Please select a course",
                level_id: "Please select a level",
                subject_id: "Please select a subject",
                "Question[subject_area_id]": "Please select a subject area",
                "Question[number_of_marks]": "Please add marks for this question",
                "Question[question_text]": "Please fill in the question text",
                question_type: "Please select a question type"




            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });


    function validateForm() {
        var select_qt = document.getElementById("question_type");
        var selectvalue_qt = select_qt.options[select_qt.selectedIndex].value;
        if (selectvalue_qt == "DRAG_DROP_TYPEC_ANSWER") {
            return validateFormTypeC();
        } else {
            return true;
        }
    }
</script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/ajax_validation/ajaxvalidation.js"></script>



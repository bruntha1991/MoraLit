<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/navbar-fixed-top.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/carousel.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-spinner.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/font-awesome/css/font-awesome.css" />

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.spinner.min.js" type="text/javascript"></script>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js" type="text/javascript"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>
    </head>

    <body>


        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'brand' => 'MoraLit Dashboard',
            'brandUrl' => array('/admin'),
            'type' => 'inverse',
            'collapse'=>true,
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/admin')),
//                array('label'=>'About', 'url'=>array('#')),
//                array('label'=>'Contact', 'url'=>array('#')),
//                
                      //  array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
        ));
        ?>
        <?php //if(isset($this->breadcrumbs)):?>
        <?php
        //$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        //'links'=>$this->breadcrumbs,
        //)); 
        ?><!-- breadcrumbs -->
        <?php //endif ?>
        <!--       <div class="row">
          <div class="span4"> <img src="assets/img/logo.png" class="img-responsive" alt="Responsive image"> </div>
          
        </div>--><p>&nbsp;</p>
        <p>&nbsp;</p>


        <?php
        $route = '';
        $route = Yii::app()->controller->id;

        if ($route != 'default') {
            ?>
            <div class="span3"><br/>
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">


                        <li <?php echo ($route == 'crew') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Crew Management', array('crew/index')) ?>
                        </li>

                        <li <?php echo ($route == 'blog') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Blog Management', array('blog/index')) ?>
                        </li>

                        <li <?php echo ($route == 'user') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('User Management', array('user/index')) ?>
                        </li>

                        <li <?php echo ($route == 'comment') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Comments Management', array('comment/index')) ?>
                        </li>

                        <li <?php echo ($route == 'photo') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Galary Management', array('photo/index')) ?>
                        </li>

                        <li <?php echo ($route == 'event') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Event Management', array('event/index')) ?>
                        </li>

                        <li <?php echo ($route == 'subEvent') ? 'class="active"' : '' ?>>
                            <?php echo CHtml::link('Sub-Event Management', array('subEvent/index')) ?>
                        </li>



                    </ul>
                </div><!--/.well -->
            </div>
        <?php } else { ?>

            <div class="span2"></div>


        <?php } ?>


        <!--/span-->

        <!--        <div class="container">-->


       <?php echo $content; ?>

        <div class="clear"></div>


        <!--	<div id="footer">
                        Copyright &copy; <?php //echo date('Y');             ?> by My Company.<br/>
                        All Rights Reserved.<br/>
        <?php //echo Yii::powered();  ?>
                </div> footer -->

        <!--</div> page -->
        <p>&nbsp;</p>
        <div class="clear"></div>

        <footer>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </footer>

    </body>
</html>
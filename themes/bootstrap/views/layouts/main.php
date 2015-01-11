
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/navbar-fixed-top.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/carousel.css" />

            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js" type="text/javascript"></script>
            <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/css/styles-small.css', 'only screen and (max-width: 800px)'); ?>


            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
            <?php Yii::app()->bootstrap->register(); ?>

            <!-- custom style sheet of the site -->    
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

    </head>

    <body>

        <!-- Fixed navbar -->

        <div class="container">

            <div id="header-spacing" class="row">  
                <div class="span4" id="img_logo"> <img src="assets/img/logo.png" class="img-responsive" alt="Responsive image"> </div>
                <div class="span8">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <?php
                            $route = '';
                            $route = Yii::app()->controller->id . '/' . Yii::app()->controller->action->id;
                            ?>
                            <ul class="nav masthead-nav" style="margin-top: 10px;">
                                <li <?php echo ($route == 'site/index') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('Home', Yii::app()->homeUrl) ?>
                                </li>

                                <li <?php echo ($route == 'site/viewAboutus') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('About Us', array('site/viewAboutus')) ?>
                                </li>
                                <li <?php echo ($route == 'crew/index') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('Crew', array('crew/index')) ?>
                                </li>

                                <li <?php echo ($route == 'user/create') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('Register', array('user/create')) ?>
                                </li>

                                <li <?php echo ($route == 'blog/index') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('News', array('blog/index')) ?>
                                </li>

                                <li <?php echo ($route == 'site/contact') ? 'class="active"' : '' ?>>
                                    <?php echo CHtml::link('Contact', array('site/contact')) ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php echo $content; ?>

        <div class="clear"></div>
        <!--        <div class="bottom_container_sub_footer"> 
                    <div class="container">
                        <footer>
                            <style>
                                dd img{
                                    height: 25px;
                                }
                            </style>
                            <div class="span3"></div>
                            <div class="span3" style="margin-top: 86px;"> <p class="footer-icon"> <?php /* ?><img src="assets/img/fb.png"> <img src="assets/img/tweeter.png"> <img src="assets/img/gplus.png"><?php */ ?>  <p>&copy; LearnCIMA <?php echo date('Y'); ?> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> </p> </div>
        
                            <p class="pull-right" style="margin-top: 125px;"><a href="#">Back to top</a></p>
        
                        </footer>
                    </div>
        
                </div>-->
    </body>
</html>

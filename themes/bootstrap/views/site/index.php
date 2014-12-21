<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/slick.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.totemticker.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.0.0/bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ticker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/site.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ticker-style.css" />

<?php $this->pageTitle = Yii::app()->name; ?>
<div class="container">
    <div class="row"> 
        <div class="span12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/slide-1.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slide-2.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slide-3.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slide-4.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div><!-- /.carousel -->
        </div>
    </div>


    <div class="span2">
        <div class="span9">

            <?php $msgs = Blog::model()->getBroadcastNews(); ?>
            <ul id="js-news" class="js-hidden"> 

                <?php
                foreach ($msgs as $msg) {
                    ?>

                    <li class="news-item"><?php echo Blog::model()->TruncateText($msg['content'], 50); ?>
                        &nbsp;

                        <?php
                        if (strlen($msg['content']) > 40) {
                            echo CHtml::link('Read more', array('blog/view',
                                'id' => $msg['blog_id'],
                                    ), array('blog_id' => 'readmore'));
                        }
                        ?>
                    </li>

                    <?php
                }
                ?>
            </ul>

        </div>
    </div>
</div>

<!--    /container -->

<script>
    $(document).ready(function () {

        //alert("The paragraph was clicked.");
        $('.vertical-ticker').totemticker({
            row_height: '100px',
            next: '#ticker-next',
            previous: '#ticker-previous',
            stop: '#stop',
            start: '#start',
            max_items: 3
        });

        $('.carousel').carousel({
            interval: 3600
        })
    }); //ready

</script>

<script type="text/javascript">

    $(function () {
        $('#js-news').ticker(
                speed: 0.10, // The speed of the reveal
                ajaxFeed: false, // Populate jQuery News Ticker via a feed
                feedUrl: false, // The URL of the feed
                // MUST BE ON THE SAME DOMAIN AS THE TICKER
                feedType: 'xml', // Currently only XML
                htmlFeed: true, // Populate jQuery News Ticker via HTML
                debugMode: true, // Show some helpful errors in the console or as alerts
                // SHOULD BE SET TO FALSE FOR PRODUCTION SITES!
                controls: true, // Whether or not to show the jQuery News Ticker controls
                titleText: 'Latest', // To remove the title set this to an empty String
                displayType: 'reveal', // Animation type - current options are 'reveal' or 'fade'
                direction: 'ltr'       // Ticker direction - current options are 'ltr' or 'rtl'
        pauseOnItems: 2000, // The pause on a news item before being replaced
                fadeInSpeed: 600, // Speed of fade in animation
                fadeOutSpeed: 300      // Speed of fade out animation
                );
    });
</script>


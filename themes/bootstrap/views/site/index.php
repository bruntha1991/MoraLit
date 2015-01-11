<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/slick.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.totemticker.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.0.0/bootbox.min.js"></script>
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
                        <img src="assets/img/home_slider/slide-1.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/home_slider/slide-2.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/home_slider/slide-3.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/home_slider/slide-4.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div><!-- /.carousel -->
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
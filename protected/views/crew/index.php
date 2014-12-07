<?php
/* @var $this CrewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Crews',
);

$this->menu=array(
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>
<div id="about" class="page-alternate">
<div class="container">
<div class="row" img = "assets/img/slide1.jpg">
    	
<!--        
        
         Start Profile 
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Vice-President</span>
                </div>
                <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle">
            </div>
            <h3 class="profile-name">Jane Helf</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Vice President</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Secretary</span>
                </div>
                <img src="assets/img/user1.png" alt="John Doe" class="img-circle">
            </div>
            <h3 class="profile-name">John Doe</h3>
            <p class="profile-description">
            
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Vice Secretary</span>
                </div>
                <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle">
            </div>
            <h3 class="profile-name">Jane Helf</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Treasurer</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
        
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Editor-1</span>
                </div>
                <img src="assets/img/user1.png" alt="John Doe" class="img-circle">
            </div>
            <h3 class="profile-name">John Doe</h3>
            <p class="profile-description">
            
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Editor-2</span>
                </div>
                <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle">
            </div>
            <h3 class="profile-name">Jane Helf</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Editor-3</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Web Coordinator</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-1</span>
                </div>
                <img src="assets/img/user1.png" alt="John Doe" class="img-circle">
            </div>
            <h3 class="profile-name">John Doe</h3>
            <p class="profile-description">
            
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-2</span>
                </div>
                <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle">
            </div>
            <h3 class="profile-name">Jane Helf</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-3</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-4</span>
                </div>
                <img src="assets/img/user1.png" alt="John Doe" class="img-circle">
            </div>
            <h3 class="profile-name">John Doe</h3>
            <p class="profile-description">
            
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-5</span>
                </div>
                <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle">
            </div>
            <h3 class="profile-name">Jane Helf</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
         Start Profile 
    	<div class="span2 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Representative-6</span>
                </div>
                <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle">
            </div>
            <h3 class="profile-name">Joshua Insanus</h3>
            <p class="profile-description">
        </div>
         End Profile 
        
        -->
        
        <h1>Crews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
        
    </div>
</div>

</div>




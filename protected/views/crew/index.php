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
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div id="about" class="page-alternate">
<div class="container">
    
    <div class="hero-unit"></div>
    
<div class="row">
    	
        <!-- Start Profile -->
        <div class="span4 center-block" style="text-align: center; margin-bottom: 8px" >        	
            <img src="assets/img/user1.png" alt="John Doe" class="img-circle " id="president" hspace="4%" vspace="1%" >           
            <h3 class="profile-name">President</h3>
            <p class="profile-description">            
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle" id="vice-president" hspace="4%" vspace="1%">          
            <h3 class="profile-name">Vice-President</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" id="vice-president" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Vice-President</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
                
        <!-- Start Profile -->
    	<div class="span4 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user1.png" alt="John Doe" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Secretary</h3>
            <p class="profile-description">
            
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
        <div class="span4 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle" hspace="4%" vspace="1%">
            <h3 class="profile-name">Vice-Secretary</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
        <div class="span4 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Treasurer</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
        <div class="span3 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user1.png" alt="John Doe" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Editor</h3>
            <p class="profile-description">
            
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 center-block" style="text-align: center; margin-bottom: 8px" > 
            <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle" hspace="4%" vspace="1%">           
            <h3 class="profile-name">Editor</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 center-block" style="text-align: center; margin-bottom: 8px" > 
            <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" hspace="4%" vspace="1%">        
            <h3 class="profile-name">Editor</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span3 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" hspace="4%" vspace="1%" onclick="popitup()">
            <h3 class="profile-name">Web Coordinator</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px" > 
            <img src="assets/img/user1.png" alt="John Doe" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">            
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px"> 
           <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user1.png" alt="John Doe" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">
            
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user2.png" alt="Jane Helf" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span2 center-block" style="text-align: center; margin-bottom: 8px"> 
            <img src="assets/img/user3.png" alt="Joshua Insanus" class="img-circle" hspace="4%" vspace="1%">            
            <h3 class="profile-name">Representative</h3>
            <p class="profile-description">
        </div>
        <!-- End Profile -->
       
        
    </div>
</div>

</div>




    
    
<script>   
<!--
function popup(url) {
	newwindow=window.open(url,'name','height=200,width=150');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
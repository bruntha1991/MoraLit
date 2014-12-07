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
<?php
$command = $connection->createCommand('SELECT * FROM crew');
$titles = $command->queryColumn();



?>



<div class="container">
<div class="container-fluid">
    <div class="row-fluid">
        
        <div class="span12" id="crew_members" style="background-color: wheat">
           
              
            <!--Body content-->
            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="lightbox hide fade" id ="president">
                        <div class='lightbox-content'>
                        <img src="assets/img/user1.png" hspace="10%" vspace="1%" alt="" class="img-circle" onclick=""/> 
                        <img src="assets/img/user2.png" hspace="4%" vspace="1%" alt=""  class="img-circle"/>
                        <img src="assets/img/user3.png" hspace="4%" vspace="1%" alt="" class="img-circle"/>    
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div id ="seceratry_treasurer">
                        <img src="assets/img/user1.png" hspace="4%" vspace="1%" alt="" class="img-circle"/> 
                        <img src="assets/img/user2.png" hspace="10%" vspace="1%" alt="" class="img-circle"/>
                        <img src="assets/img/user3.png" hspace="4%" vspace="1%" alt="" class="img-circle"/>                
                    </div>
                </div>
            </div>
            
            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div id ="editor_web">
                        <img src="assets/img/user1.png" hspace="4%" vspace="1%" alt="" class="img-circle"/> 
                        <img src="assets/img/user2.png" hspace="10%" vspace="1%" alt="" class="img-circle"/>
                        <img src="assets/img/user3.png" hspace="4%" vspace="1%" alt="" class="img-circle"/>                
                    </div>
                </div>
            </div>
            
            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div id ="representatives">
                        <img src="assets/img/user1.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/> 
                        <img src="assets/img/user2.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/>
                        <img src="assets/img/user3.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/>

                        <img src="assets/img/user1.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/> 
                        <img src="assets/img/user2.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/>
                        <img src="assets/img/user3.png" hspace="0.5%" vspace="1%" alt="" class="img-circle"/>     
                    </div>
                </div>
            </div>
            
        </div>            
    </div>         
</div>
</div>


<?php $this->
        widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

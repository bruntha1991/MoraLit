<?php
/* @var $this CrewController */
/* @var $model Crew */
$this->breadcrumbs=array(
	'Crews'=>array('index'),
	$model->crew_id,
);
$this->menu=array(
	array('label'=>'List Crew', 'url'=>array('index')),
	array('label'=>'Create Crew', 'url'=>array('create')),
	array('label'=>'Update Crew', 'url'=>array('update', 'id'=>$model->crew_id)),
	array('label'=>'Delete Crew', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->crew_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Crew', 'url'=>array('admin')),
);
?>

<div class="container" >
    <div class='hero-unit' >
        
        <h2><?php echo $model->designation; ?> - <?php echo $model->year; ?> </h2>                
        <table class="table table-striped" style="width:80%;background-color: #E0F8F7;" align ="center">
            <col width="240">
            <col width="130">
            <tbody class="hover">
            <tr class="warning" >
                <div>
                    <td rowspan="5">
                    <?php
                        $imghtml= CHtml::image($model->image);
                        echo CHtml::link($imghtml, array('view', 'id'=>$model->crew_id));
                    ?> 
                    </td>
                </div>
            </tr> 
            <tr class="success">
                <div>
                    <td><h4>Name : </h4></td>
                    <td><?php echo $model->first_name;?> <?php echo $model->last_name; ?></td>
                </div>
            </tr>
            <tr>
                <div> 
                    <td><h4>Faculty : </h4></td>
                    <td><?php echo $model->faculty; ?></td>
                </div></tr>
            <tr class="success">
                <div> 
                    <td><h4>Email : </h4></td>
                    <td><?php echo $model->email; ?></td>
                </div></tr>
            <tr>
                <div> 
                    <td><h4>Contact No : </h4></td>
                    <td><?php echo $model->contact_no; ?></td>
                </div>
            </tr>                    
            </tbody>
        </table>
    </div>
</div>
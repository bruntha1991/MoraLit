<?php
$this->breadcrumbs = array(
    $this->module->id,
);
?>

<div class="container">
    <div class="span12">
        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Crew</span>', array('/admin/crew'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Blogs</span>', array('/admin/blog'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Users</span>', array('/admin/user'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Comments</span>', array('/admin/comment'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Album</span>', array('/admin/album'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Events</span>', array('/admin/event'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Sub-events</span>', array('/admin/subEvent'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>
        
        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Home Page</span>', array('/admin/site'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>
    </div>

    <div class="span12">
        <hr class="hrstyle">
    </div>
</div>  

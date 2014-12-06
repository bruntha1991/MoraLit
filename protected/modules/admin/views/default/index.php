<?php
$this->breadcrumbs = array(
    $this->module->id,
);
?>

<div class="container">
    <div class="span12">
        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Crew</span>', array('/admin/course'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Blogs</span>', array('/admin/level'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Users</span>', array('/admin/subject'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Comments</span>', array('/admin/subjectArea'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Album</span>', array('/admin/sitting'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Events</span>', array('/admin/news'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>

        <div class="span3">
            <div class="shortcutsadmin">
                <?php echo CHtml::link('<i class="icon-zoom-in text-large"></i><span class="shortcut-label">Manage Sub-events</span>', array('/admin/country'), array('class' => 'shortcutadmin')); ?>
            </div> <!-- /shortcuts -->	
        </div>
    </div>

    <div class="span12">
        <hr class="hrstyle">
    </div>
</div>  

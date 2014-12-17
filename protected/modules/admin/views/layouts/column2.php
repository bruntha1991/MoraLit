
<?php $this->beginContent('/layouts/main'); ?>

<div class="span9">    
        <div class="span-5 last operations_ads">
            <div id="sidebar">

                    <?php   
                            $this->beginWidget('zii.widgets.CPortlet', array(
                                    //'title'=>'Operations',
                            ));
                            $this->widget('bootstrap.widgets.TbMenu', array(
                            'items'=>$this->menu,
                                            'htmlOptions'=>array('class'=>'operations'),
                            ));
                            $this->endWidget();
                    ?>
             </div>
          </div>	
</div>

    <div class="span9" style="position: absolute; top:80px; left: 300px">
<!--        <div id="content">-->
		<?php echo $content; ?>
	<!--</div> content -->
</div>


    <!--</div>-->
<?php $this->endContent(); ?>
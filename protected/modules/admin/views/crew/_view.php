<?php
/* @var $this CrewController */
/* @var $data Crew */
?>

<div class="view">

    <!-- Start Profile -->
        <div class="span4 profile">
            <div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    
                    <span class="overlay-text-thumb">
    <!--                    <b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>-->
                        <h3 class="profile-name">
                            <!--<b><?php echo CHtml::encode($data->designation); ?></b>-->
                            <?php echo CHtml::link(CHtml::encode($data->designation), array('view', 'id' => $data->crew_id)); ?>

                            <br />
                        </h3>

                    </span>
                </div>
               <?php
               $imghtml= CHtml::image($data->image);
                $img ='assets/crew/' . $imghtml->name;
                echo CHtml::link($img, array('view', 'id'=>$data->crew_id));
                ?>          
            </div>
            <h5 class="profile-name">
                <?php echo CHtml::encode($data->first_name); ?>

                <?php echo CHtml::encode($data->last_name); ?>l

            </h5>
            <p class="profile-description">

        </div>
    <!-- End Profile -->
</div>
<?php
/* @var $this CrewController */
/* @var $data Crew */
?>

<div class="view">

    <!-- Start Profile -->
    <div class="container">
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
                echo CHtml::link($imghtml, array('view', 'id'=>$data->crew_id));
                ?>          


            </div>
            <h5 class="profile-name">
                <?php echo CHtml::encode($data->first_name); ?>

                <?php echo CHtml::encode($data->last_name); ?>

            </h5>
            <p class="profile-description">

        </div>
    </div>
    <!-- End Profile -->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('crew_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->crew_id), array('view', 'id' => $data->crew_id)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('faculty')); ?>:</b>
    <?php echo CHtml::encode($data->faculty); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
    <?php echo CHtml::encode($data->year); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
    <?php echo CHtml::encode($data->designation); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('contact_no')); ?>:</b>
    <?php echo CHtml::encode($data->contact_no); ?>
        <br />-->

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
      <?php echo CHtml::encode($data->email); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
      <?php echo CHtml::encode($data->image); ?>
      <br />

     */ ?>

</div>
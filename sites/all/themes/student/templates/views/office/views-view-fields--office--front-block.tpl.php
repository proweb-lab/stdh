<div class="office-block">
   <?php
   $extra_title = $fields['field_extra_title'];
   if(!empty( $extra_title)){
    ?>

       <div class="ribbon-wrapper-green">
           <?php print $extra_title->content;?>
           <div class="ribbon-green">NEWS</div>
       </div>

    <?php }?>
    <div class="office-image">
        <?php print $fields['field_image']->content;?>
    </div>
    <h3 class="office-title">
        <?php print $fields['title']->content; ?>
    </h3>
</div>
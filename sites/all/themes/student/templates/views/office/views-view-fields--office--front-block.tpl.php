<div class="office-block">
   <?php
   $extra_title = $fields['field_extra_title']->content;
   if(!empty( $extra_title)){
    ?>

 <div class="ribbon">
     <div class="ribbon-green">قريبا</div>
     <?php print $extra_title;?>
   </div>

    <?php }?>
    <div class="office-image">
        <?php print $fields['field_image']->content;?>
    </div>
    <h3 class="office-title">
        <?php print $fields['title']->content; ?>
    </h3>
</div>
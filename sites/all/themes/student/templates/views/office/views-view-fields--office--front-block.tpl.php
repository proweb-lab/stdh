<div class="office-block">
   <?php
   $extra_title = $fields['field_extra_title'];
   if(!empty( $extra_title)){
    ?>
       <img class="clip-animation" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/building-to-be-clipped.jpg">
       <div class="extra-title">
           <?php print $extra_title->content;?>
       </div>

    <?php }?>
    <div class="office-image">
        <?php print $fields['field_image']->content;?>
    </div>
    <h3 class="office-title">
        <?php print $fields['title']->content; ?>
    </h3>
</div>
<div class="office-block">
   <?php
   $extra_title = $fields['field_extra_title'];
   if(!empty( $extra_title)){
    ?>

   <?php echo'
           <div class="ribbon-green">NEWS</div>';

            print $extra_title->content;

?>
    <?php }?>
    <div class="office-image">
        <?php print $fields['field_image']->content;?>
    </div>
    <h3 class="office-title">
        <?php print $fields['title']->content; ?>
    </h3>
</div>
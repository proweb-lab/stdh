<div class="row">
    <div class="col-sm-10">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
    <div class="col-sm-2">
    <h3 class="addresses_header"><?php print t('Addresses'); ?></h3>
    <h4 class="addresses_label"><?php  print t("address").render($content['field_address']);?></h4>
   <?php//  print render($content['field_address']);?>
        <h4 class="phone_label"><?php print t("phone");?></h4>
     <?php print render($content['field_phone']);?>
            <h4 class="email_label"><?php print t("email");?></h4>
     <?php print render($content['field_email']);?>


</div>


</div>

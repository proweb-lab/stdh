<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
<div class="addresses">
    <h3 class="addresses_header"><?php print t('Addresses'); ?></h3>
    <p class="addresses_label"><?php  print t("address").render($content['field_address']);?></p>
   <?php//  print render($content['field_address']);?>
        <h4 class="phone_label"><?php print t("phone");?></h4>
     <?php print render($content['field_phone']);?>
            <h4 class="email_label"><?php print t("email");?></h4>
     <?php print render($content['field_email']);?>


</div>




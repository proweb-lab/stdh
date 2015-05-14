<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
<div class="addresses">
    <h3 class="addresses"><?php print t('Addresses'); ?></h3>
    <h4 class="addresses"><?php  print t("address");?></h4>
   <?php  print render($content['field_address']);?>
        <h4 class="phone"><?php print t("phone");?></h4>
     <?php print render($content['field_phone']);?>
            <h4 class="phone"><?php print t("email");?></h4>
     <?php print render($content['field_email']);?>


</div>




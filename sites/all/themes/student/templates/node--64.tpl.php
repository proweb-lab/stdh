

<h3 class="addresses"><?php print t('Addresses'); ?></h3>
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
<div class="addresses">
     //print render($filed_name['field_address']);
    <h2 class="addresses"><?php  print t("address");?>
   <?php  print render($content['field_address']);?>
        <h2 class="phone"><?php print t("phone");?>
     <?php print render($content['field_phone']);?>
            <h2 class="phone"><?php print t("email");?>
     <?php print render($content['field_email']);?>


</div>




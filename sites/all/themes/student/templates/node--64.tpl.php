

<h3 class="addresses"><?php print t('Addresses'); ?></h3>
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
<div class="addresses">

    <h2 class="addresses"><?php  print t("address");?></h2>
   <?php  print render($content['field_address']);?>
        <h2 class="phone"><?php print t("phone");?></h2>
     <?php print render($content['field_phone']);?>
            <h2 class="phone"><?php print t("email");?></h2>
     <?php print render($content['field_email']);?>


</div>




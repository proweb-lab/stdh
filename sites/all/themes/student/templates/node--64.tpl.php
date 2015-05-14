<div class="row">
    <div class="col-sm-8">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
    <div class="col-sm-4" >
        <div class="box">
        <h3 class="addresses_header"><?php print t('Addresses information'); ?></h3>
        <h4 class="phone_label"><?php print t("phone:").render($content['field_phone']);?></h4>
        <h4 class="email_label"><?php print t("email:").render($content['field_email']);?></h4>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-sm-8">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
    <div class="col-sm-4" >
        <div class="box">
        <div class="addresses_header"><h3><?php print t('Addresses information'); ?></h3></div>
        <h4 class="phone_label"><span class="glyphicon glyphicon-name"></span><?php print t("phone:").render($content['field_phone']);?></h4>
        <h4 class="email_label"><?php print t("email:").render($content['field_email']);?></h4>
        </div>
    </div>


</div>

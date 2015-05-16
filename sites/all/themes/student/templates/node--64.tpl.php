<div class="row">
    <div class="col-sm-8">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
    <div class="col-sm-4" >
        <div class="box">
        <div class="addresses_header"><h4><?php print t('Addresses information'); ?></h4></div>
        <h5 class="phone_label"><?php print t("phone:").render($content['field_phone']);?></h5>
            <h5 class="email_label"><?php print t("email:");?><a href="mailto:info@studenthome.com">info@studenthome.com</a></h5>
    

    </div>

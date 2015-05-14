

<h3 class="addresses"><?php print t('Addresses'); ?></h3>
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
<div class="addresses">
    <?php //print render($filed_name['field_address']);
    print t("address");
    print render($content['field_address']);



    ?>

</div>




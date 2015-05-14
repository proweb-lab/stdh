<div class="row">
    <div class="col-sm-6">
<h3 class="addresses"><?php print t('Addresses'); ?></h3>
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
    </div>
    <div class="col-sm-6">

    </div>


</div>
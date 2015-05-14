<div class="row">
    <div class="col-sm-8">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
   
       
   
        <a href="mailto:<?php print render($content['field_email'])?>"></a>
    </div>

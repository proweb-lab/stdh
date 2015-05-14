<div class="row">
    <div class="col-sm-8">
<?php
   $block_contact = module_invoke('webform', 'block_view', 'client-block-64');
   print render($block_contact['content']);
?>
        </div>
    <div class="col-sm-4" >
        <div class="box">
        <h3 class="addresses_header"><?php print t('Addresses'); ?></h3>
        <h4 class="addresses_label"><?php  print t("address:").render($content['field_address']);?></h4>
        <h4 class="phone_label"><?php print t("phone:").render($content['field_phone']);?></h4>
        <h4 class="email_label"><?php print t("email:").render($content['field_email']);?></h4>

            <?php foreach ($items as $key => $value) { ?>

                <?php $item = $variables['element'][$key]['entity']['field_collection_item'][$value]; ?>
                <div class="office-info">
                    <div class="collection-title"><?php echo render($item['field_title'][0]); ?></div>
                    <div class="colloction-info">
                        <div class="colloction-info-body">
                            <?php echo render($item['field_body'][0]); ?>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>


</div>

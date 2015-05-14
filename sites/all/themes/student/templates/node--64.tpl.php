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
            <h4 class="email_label"><?php print t("email:").render($content['field_branches']);?></h4>

            <?php foreach ($items as $key => $value) { ?>

                <?php $item = $variables['element'][$key]['entity']['field_collection_item'][$value]; ?>

                  <?php echo render($item['field_country'][0]); ?>


                            <?php echo render($item['field_countryphone'][0]); ?>

                <?php echo render($item['field_email'][0]); ?>


            <?php } ?>

        </div>
    </div>


</div>

<?php
$items = array();
if (count($variables['element']['#items']) > 0) {
    foreach ($variables['element']['#items'] as $key => $value) {
        $items[$key] = $value['value'];
    }
    ?>
    <div class="accordion">
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



<?php } ?>
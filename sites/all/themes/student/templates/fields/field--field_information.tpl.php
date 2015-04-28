<?php
$items = array();
if (count($variables['element']['#items']) > 0) {
  foreach ($variables['element']['#items'] as $key => $value) {
    $items[$key] = $value['value'];
  }
  ?>

         <?php foreach ($items as $key => $value) { ?>
           <?php $item = $variables['element'][$key]['entity']['field_collection_item'][$value]; ?>
      <div class="slideshow-item" >
        <?php echo render($item['field_title'][0]); ?>
        <div class="slideshow-text cycle-overlay">
          <?php echo render($item['field_body'][0]); ?>
        </div>
       
      </div>
    <?php } ?>
 
 
<?php } ?>
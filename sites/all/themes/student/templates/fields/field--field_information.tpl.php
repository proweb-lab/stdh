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
    <h3 class="collection-title"><?php echo render($item['field_title']); ?></h3>
        <div class="colloection-info">
          <?php echo render($item['field_body']); ?>
        </div>
       
     
    <?php } ?>
</div>
    
 
 
<?php } ?>
<?php
$items = array();
if (count($variables['element']['#items']) > 0) {
  foreach ($variables['element']['#items'] as $key => $value) {
    $items[$key] = $value['value'];
  }
  ?>
<div id="accordion">
         <?php foreach ($items as $key => $value) { ?>
        
   <?php $item = $variables['element'][$key]['entity']['field_collection_item'][$value]; ?>
    <h3><?php echo render($item['field_title'][0]); ?></h3>
        <div class="colloection-info">
          <?php echo render($item['field_body'][0]); ?>
        </div>
       
     
    <?php } ?>
</div>
    
 
 
<?php } ?>
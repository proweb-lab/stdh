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
    <h3 class="collection-title"><?php echo render($item['field_title'][0]); ?></h3>
        <div class="colloction-info">
             <div class="colloction-info-body">
          <?php echo render($item['field_body'][0]); ?>
        </div>
        </div>
       
     
    <?php } ?>
</div>
    
 
 
<?php } ?>

<!--<span //class="glyphicon glyphicon-chevron-down"></span>-->
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
    <h3 class="collection-title"><?php echo render($item['field_title'][0]); ?><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAABaCAMAAAAmXYzyAAAAM1BMVEX///8AAACpqaliYmJtbW2mpqZcXFxpaWmjo6OXl5dfX1++vr6dnZ2zs7Ovr6+5ubnc3NzgtNhYAAAAxklEQVRoge3SSQ6DMBAFURoDZib3P23CYBxEAuzaLdVb4V6V0M8yAAAAAAAAAAAApOd1e0hPJ/nxkEunU/LcJCL196H+HCatmmdGmTXx0CyHUa/o3iCrPhz67TBoVl3rJNh2ne+HdHfd7o1Szu8yvlvttv9crGzCnhdOu+yKj511Hb+9dte1Qn4otKvuuHNz0ttYnaoNNB92bWDPwWHXye858Ob+82zftYk9B85g87ZrM3sOvKk9B1WlXQAAAAAAAAAAAEx6AwX5AnmAuUUtAAAAAElFTkSuQmCC"></img></h3>
        <div class="colloction-info">
             <div class="colloction-info-body">
          <?php echo render($item['field_body'][0]); ?>
        </div>
        </div>
       
     
    <?php } ?>
</div>
    
 
 
<?php } ?>
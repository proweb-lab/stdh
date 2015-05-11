<article class="node-page node-<?php print $node->nid; ?> <?php print $classes; ?> "<?php print $attributes; ?>>
<span class="uni-name" ><?php print   $title;?></span>

<?php
$country = intval($node->field_recognition['und'][0]['value']);
print_r($country);
 switch($country){
        case 1:
          echo '<span class="reg-country">';
          print t('Jorn');
           print '</span>';
          break;
        case 2:
            echo '<span class="reg-country">';
          print t('Qater');
            print '</span>';
          break;
        case 3:
            echo '<span class="reg-country">';
         print t('UAE');
           print '</span>';
          break;
        case 4:
            echo '<span class="reg-country">';
            print t('kw');
              print '</span>';
          break;
     
 }
       ?>
</article>


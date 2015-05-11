<span class="uni-name" ><?php print  render($title);?></span>

<?php
$country = intval($node->field_recognition['und'][0]['value']);
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
<span class="uni-name" ><?php print $fields['title']->content;?></span>
<!--<span class="reg-country">
    
          
        </span>
         <span class="reg-country">
          
        </span>
         <span class="reg-country">
        
        </span>
         <span class="reg-country">
         
        </span>-->
<?php
$country = intval($fields['field_recognition']);
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
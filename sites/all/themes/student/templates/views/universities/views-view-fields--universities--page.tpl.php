<span class="uni-name" ><?php print $fields['title']->content; ?></span>

<?php
//$country = intval($node->field_recognition['und'][0]['value']);
// switch($country){
        if(($fields['field_recognition'][0]['raw']['value']) == 1){
          echo '<span class="reg-country">';
          print t('Jorn');
           print '</span>';
        }
         if($fields['field_recognition']->content==2){
            echo '<span class="reg-country">';
          print t('Qater');
            print '</span>';
         }
         if($fields['field_recognition']->content==3){
            echo '<span class="reg-country">';
         print t('UAE');
           print '</span>';
         }
         if($fields['field_recognition']->content==4){
            echo '<span class="reg-country">';
            print t('kw');
              print '</span>';
         }
     
 
       ?>
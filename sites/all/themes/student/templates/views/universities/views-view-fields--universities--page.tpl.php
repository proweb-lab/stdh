<span class="uni-name" ><?php print $fields['title']->content; ?></span>

<?php
//$country = intval($node->field_recognition['und'][0]['value']);
// switch($country){

        if(($fields['field_recognized_jo']->content) == 'Yes'){
          echo '<span class="reg-country">';
          print t('Jorn');
           print '</span>';
        }
         if($fields['field_recognized_qa']->content=='Yes'){
            echo '<span class="reg-country">';
          print t('Qater');
            print '</span>';
         }
       
     
 
       ?>
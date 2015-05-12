<span class="uni-name" ><?php print $fields['title']->content; ?></span>

<?php
//$country = intval($node->field_recognition['und'][0]['value']);
// switch($country){
//print '<pre>';
//print_r($fields['field_recognized_jo']);
//print '</pre>';
//$jo = field_info_field('field_recognized_jo');
//$allowed_values_jo = list_allowed_values($field);
//print_r($allowed_values[2]);

      if(isset($allowed_values[1])){
            echo '<span class="reg-country">';
          print t('Jordan yes');
            print '</span>';
         }
        
       else{
             echo '<span class="reg-country">';
            print t('no jordan');
           print '</span>';
        }
       
         if(isset($allowed_values[1])){
            echo '<span class="reg-country">';
          print t('yes Qer');
            print '</span>';
         } 
        
         else{
              echo '<span class="reg-country">';
          print t('no qatar');
            print '</span>';
         }
            if(isset($allowed_values[1])){
            echo '<span class="reg-country">';
          print t('yes uae');
            print '</span>';
         } 
        
         else{
              echo '<span class="reg-country">';
          print t('no uae');
            print '</span>';
         }
            if(isset($allowed_values[1])){
            echo '<span class="reg-country">';
          print t('yes kw');
            print '</span>';
         } 
        
         else{
              echo '<span class="reg-country">';
          print t('no kw');
            print '</span>';
         }
    
       
   
 
       ?>
<!--$field = field_info_field('field_name');
$allowed_values = list_allowed_values($field);-->
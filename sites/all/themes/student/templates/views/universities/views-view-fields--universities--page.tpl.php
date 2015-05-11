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

        if($fields['field_recognized_jo']->content=='Yes'){
            echo '<span class="reg-country">';
          print t('Jordan yes');
            print '</span>';
         }
        elseif($fields['field_recognized_jo']->content=='No'){
             echo '<span class="reg-country">';
            print t('no jordan');
           print '</span>';
        }
         elseif($fields['field_recognized_qa']->content=='Yes'){
            echo '<span class="reg-country">';
          print t('yes Qer');
            print '</span>';
         } 
         elseif($fields['field_recognized_qa']->content=='No'){
              echo '<span class="reg-country">';
          print t('no qatar');
            print '</span>';
         }
       
   
 
       ?>
<!--$field = field_info_field('field_name');
$allowed_values = list_allowed_values($field);-->
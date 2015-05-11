<span class="uni-name" ><?php print $fields['title']->content; ?></span>

<?php
//$country = intval($node->field_recognition['und'][0]['value']);
// switch($country){
//print '<pre>';
//print_r($fields['field_recognized_jo']);
//print '</pre>';
$field = field_info_field('field_recognized_jo');
$allowed_values = list_allowed_values($field);
print_r($allowed_values[2]);
        if(isset($allowed_values[1])){
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
<!--$field = field_info_field('field_name');
$allowed_values = list_allowed_values($field);-->
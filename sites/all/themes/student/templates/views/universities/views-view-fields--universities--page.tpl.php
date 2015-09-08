<span class="uni-name list" ><?php print $fields['title']->content; ?></span>

<?php
//$country = intval($node->field_recognition['und'][0]['value']);
// switch($country){
//print '<pre>';
//print_r($fields['field_recognized_jo']);
//print '</pre>';
//$jo = field_info_field('field_recognized_jo');
//$allowed_values_jo = list_allowed_values($field);
//print_r($allowed_values[2]);

         if($fields['field_recognized_jo']->content=='yes'){
            echo '<span class="reg-country yes">';
         
            print '</span>';
         }
        
       else{
             echo '<span class="reg-country no">';
           
           print '</span>';
        }
       
         if($fields['field_recognized_ksa']->content=='Yes'){
            echo '<span class="reg-country yes">';
        
            print '</span>';
         } 
        
         else{
              echo '<span class="reg-country no">';
       
            print '</span>';
         }
        
      
            if($fields['field_recognized_uae']->content=='Yes'){
            echo '<span class="reg-country yes">';
         
            print '</span>';
         } 
         
        
         else{
              echo '<span class="reg-country no">';
        
            print '</span>';
         }
            if($fields['field_recognized_kw']->content=='yes'){
            echo '<span class="reg-country yes">';
         
            print '</span>';
         } 
        
         else{
              echo '<span class="reg-country no">';
        
            print '</span>';
         }
    
       
   
 
       ?>
<!--$field = field_info_field('field_name');
$allowed_values = list_allowed_values($field);-->
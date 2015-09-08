<span class="uni-name list" ><?php print $fields['title']->content; ?></span>

<?php

            if($fields['field_recognized_jodan']->content=='yes'){
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
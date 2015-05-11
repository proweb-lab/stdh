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
 switch($fields['field_recognition']){
        case 1:
          print t('Jordan');
          break;
        case 2:
          print t('Qater');
          break;
        case 3:
         print t('UAE');
          break;
        case 4:
            print t('kw');
          break;
     
 }
       ?>
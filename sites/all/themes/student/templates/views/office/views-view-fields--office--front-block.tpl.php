<?php
$html = '<div class="office-block">';

   $extra_title = $fields['field_extra_title']->content;
   if(!empty( $extra_title)){

 $html .= '<div class="ribbon-wrapper-green">';
 $html .='<span>'. print t('soon') .'</span>';
 $html .='</div>';
   }
    $html .='<div class="office-image">';
     $html .= $fields['field_image']->content;
    $html .='</div>';
    $html .='<h3 class="office-title">';
    $html .= $fields['title']->content; 
    $html .='</h3>';

$html .= '</div>';




echo l($html, $fields['field_link']->content, array('html' => TRUE));

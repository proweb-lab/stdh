<?php

function student_theme($existing, $type, $theme, $path){
  return array(
    'user_register' => array(
      'render element' => 'form',
      'template' => 'templates/user-register',
    ),
  );
}
  
function student_preprocess_page(&$variables, $hook) {
  global $user;
  if (isset($variables['node'])) {
      $type = $variables['node']->type;
     
      print_r($type);
if(($type == 'page' || $type == 'register_university' || $type == 'single_service' || $type == 'fixed_payment' || $type == 'payment') && !$user->uid){
      drupal_goto('user/login');
    }
  }
}
function student_preprocess_html(&$variables, $hook) {
  drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', 'external');
  
  // Add variables and paths needed for HTML5 and responsive support.
  $variables['base_path'] = base_path();

  // Attributes for html element.
  $variables['html_attributes_array'] = array(
    'lang' => $variables['language']->language,
    'dir' => $variables['language']->dir,
  );
}


?>
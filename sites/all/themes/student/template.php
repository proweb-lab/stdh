<?php

function stdh_theme($existing, $type, $theme, $path){
  return array(
    'user_register' => array(
      'render element' => 'form',
      'template' => 'templates/user-register',
    ),
  );
}
  
function stdh_preprocess_html(&$variables, $hook) {
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
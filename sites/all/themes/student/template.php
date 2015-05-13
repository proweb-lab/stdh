<?php

function stdh_theme($existing, $type, $theme, $path){
  return array(
    'user_register' => array(
      'render element' => 'form',
      'template' => 'templates/user-register',
    ),
  );
}
function mytheme_preprocess_page(&$variables) {
    // For node templates.
    $variables['node']->my_form = drupal_get_form('webform-client-form-64');
    // For page templates.
    // $variables['my_form'] = drupal_get_form('form_name');
}
?>
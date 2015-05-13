<h3 class="addresses"><?php print t('Addresses'); ?></h3>

<?php
$form = drupal_get_form('webform-client-form-64');
print drupal_render($form);
?>

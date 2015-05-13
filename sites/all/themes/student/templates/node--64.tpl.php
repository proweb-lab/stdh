<h3 class="addresses"><?php print t('Addresses'); ?></h3>
<?php
$block = module_invoke('webform', 'block_view', 'client-block-64');
print render($block['content']);
//print render($content['webform']);

?>
<?php
//$html = drupal_render(drupal_get_form('webform-client-form-64'));
//print $html;
//$form = drupal_get_form('webform-client-form-64');
//print drupal_render($form);
?>

<?php
//$elements = drupal_get_form("webform-client-form-64");
//$form = drupal_render($elements);
//echo $form;
?>
<?php //print render(drupal_get_form('webform-client-form-64')); ?>
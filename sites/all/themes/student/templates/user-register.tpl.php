<?php
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
?>
<?php

?>

<?php print drupal_render($form['account']['name']); // prints the username field ?>
<?php print drupal_render($form['field_full_name']); // prints the custom first name field ?>
<?php print drupal_render($form['field_id_number']); // prints the custom second name field ?>
<
<?php print drupal_render($form['account']['mail']); // prints the mail field ?>
<?php print drupal_render($form['actions']['submit']); // print the submit button ?>

<?php print drupal_render_children($form); ?>
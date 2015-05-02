<?php
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
?>
<?php

?>

<?php print drupal_render($form['account']['name']); // prints the username field ?>
<?php print drupal_render($form['field_title']); // prints the custom title field ?>
<?php print drupal_render($form['field_fullname']); // prints the custom first name field ?>
<?php print drupal_render($form['field_gender']); // prints the custom second name field ?>
<?php print drupal_render($form['field_position']); // prints the custom second name field ?>
<?php print drupal_render($form['field_phone']); // prints the custom second name field ?>
<?php print drupal_render($form['field_user_interests']); // prints the custom second name field ?>
<?php print drupal_render($form['account']['mail']); // prints the mail field ?>
<?php print drupal_render($form['field_country']); // prints the country field ?>
<?php print drupal_render($form['field_organization']); // prints the custom organization field ?>
<?php print drupal_render($form['field_user_cv']); // prints the custom first name field ?>
<?php print drupal_render($form['field_user_joining_reason']); // prints the custom first name field ?>
<?php print drupal_render($form['field_theme_group']); // prints the custom first name field ?>
<?php print drupal_render($form['field_user_privacy']); // prints the user pirvacy?>
<?php print drupal_render($form['group_audience']); // prints the custom first name field ?>
<?php print drupal_render($form['actions']['submit']); // print the submit button ?>

<?php print drupal_render_children($form); ?>
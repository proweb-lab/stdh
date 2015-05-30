<?php
$form['submitted']['fluentin'] = array(
    '#type' => 'fieldset',
    '#prefix' => '<div id="vol-fluentin">',
    '#suffix' => '</div>',

);

$form['submitted']['otherlang'] = array(
    '#type' => 'fieldset',
    '#prefix' => '<div id="vol-otherlang">',
    '#suffix' => '</div>',

);

// Move the form field labeled "whatever" to the new fieldset
// $form['submitted']['newfieldset']['whatever'] = $form['submitted']['whatever'];

$form['submitted']['fluentin']['Fluent in'] = $form['submitted']['Fluent in'];
unset($form['submitted']['Fluent in']);
$form['submitted']['otherlang']['Please specify other languages'] = $form['submitted']['Please specify other languages'];
unset($form['submitted']['Please specify other languages']);

echo form_render($form);
?>
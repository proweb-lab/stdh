<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="apply">
    <?php
    global $user;

    $form_state = array();
    form_load_include($form_state, "inc", "node", "node.pages");
    $application = new stdClass();
    $application->type = 'application';
    $application->uid = $user->uid;
    $application->name = (isset($user->name) ? $user->name : '');
    // Hidden through form alter
    $application->field_app_position['und'][0]['nid'] = $node->nid;
    node_object_prepare($application);
    echo node_show(drupal_get_form( 'application_node_form', $application ));
    ?>
   
  </div>
</article>

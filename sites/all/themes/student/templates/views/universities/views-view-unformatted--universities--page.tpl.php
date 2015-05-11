<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
   <table style="width:100%">
  <tr>
    <td><?php print t('uni');?></td>
    <td><?php print t('re');?></td> 
  </tr>
  <tr>
    <td></td>
    <td><?php print t('jo');?></td> 
    <td>94</td>
  </tr>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

</table>
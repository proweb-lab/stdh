<div class="university-node">
<div class="uni-office-title">
    <h3><?php print t('Country')?></h3>
<?php print render($content['field_office']); ?>
</div>
<div class="uni-specialtiesy">
    <h3><?php print t('Specialties')?></h3>
    <?php print render($content['field_specialties']); ?>
</div>
<div class="uni-language">
    <h3><?php print t('Study Language')?></h3>
    <?php print render($content['field_language']); ?>
</div>
<div class="uni-recognition">
     <h3><?php print t('Univrsity Recognition ')?></h3>
    <h4><?php print t('Jordan: ').render($content['field_recognized_jo']);?></h4>
     <h4><?php print t('KSA: ').render($content['field_recognized_ksa']);?></h4>
     <h4><?php print t('UAE: ').render($content['field_recognized_uae']);?></h4>
     <h4><?php print t('kwait: ').render($content['field_recognized_kw']);?></h4>
     <table style="width:100%">
  <tr>
    <td><?php print t('Jordan')?></td>
    <td><?php print t('KSA')?></td> 
    <td><?php print t('UAE')?></td>
    <td><?php print t('Kwait')?></td>
  </tr>
  <tr>
    <td><?php print render($content['field_recognized_jo']);?></td>
    <td><?php print render($content['field_recognized_ksa']);?></td> 
    <td><?php print  render($content['field_recognized_uae']);?></td>
     <td><?php print ender($content['field_recognized_kw']);?></td>
  </tr>
</table>
</div>
</div>



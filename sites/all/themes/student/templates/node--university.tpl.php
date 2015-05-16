<div class="office-title">
    <div class="label"><?php print t('Country')?></div>
<?php print render($content['field_office']); ?>
</div>
<div class="uni-specialtiesy">
    <div class="label"><?php print t('Specialties')?></div>
    <?php print render($content['field_specialties']); ?>
</div>
<div class="uni-language">
    <div class="label"><?php print t('Study Language')?></div>
    <?php print render($content['field_language']); ?>
</div>
<div class="uni-recognition">
     <div class="label"><?php t('Univrsity Recognition ')?></div>
    <div><?php print t('Jordan: ').render($content['field_recognized_jo']);?></div>
     <div><?php print t('KSA: ').render($content['field_recognized_ksa']);?></div>
     <div><?php print t('UAE: ').render($content['field_recognized_uae']);?></div>
     <div><?php print t('kwait: ').render($content['field_recognized_kw']);?></div>
</div>



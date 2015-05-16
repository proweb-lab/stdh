<div class="university-node">
    <div class="uni-office-title">
        <h3><?php print t('Country') ?></h3>
        <?php print render($content['field_office']); ?>
    </div>
    <div class="uni-specialtiesy">
        <h3><?php print t('Specialties') ?></h3>
        <?php print render($content['field_specialties']); ?>
    </div>
    <div class="uni-language">
        <h3><?php print t('Study Language') ?></h3>
        <?php print render($content['field_language']); ?>
    </div>
    <div class="uni-recognition">
        <h3><?php print t('Univrsity Recognition ') ?></h3>

        <table  border="1" style="width:100%">
            <tr>
                <td><?php print t('Jordan'); ?></td>
                <td><?php print t('KSA'); ?></td> 
                <td><?php print t('UAE'); ?></td>
                <td><?php print t('Kwait'); ?></td>
            </tr>
            <tr>
                <td><?php print render($content['field_recognized_jo']); ?></td>
                <td><?php print render($content['field_recognized_ksa']); ?></td> 
                <td><?php print render($content['field_recognized_uae']); ?></td>
                <td><?php print render($content['field_recognized_kw']); ?></td>
            </tr>
        </table>
    </div>
</div>




  <div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>
 <?php if ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>
    <div class="uni-table">
        <div class="first-row clearfix">
        <span class="uni-name empty">
            <?php print t('')?>
        </span>
            <span class="recognition">
            <?php print t('Uni Recognition')?>
        </span>
       
        </div>
        <div class="second-row clearfix">
        <span class="uni-name">
            <?php print t('University Name')?>
        </span>
        <span class="reg-country">
            <?php print t('KSA')?>
        </span>
           <span class="reg-country">
            <?php print t('Jordan')?>
        </span>
         <span class="reg-country">
            <?php print t('UAE')?>
        </span>
         <span class="reg-country">
            <?php print t('kuwait')?>
        </span>
          
       
        </div>
        
        
  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  </div>
  <?php endif; ?>
 

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>
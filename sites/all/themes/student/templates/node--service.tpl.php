<div class="service-block service-<?php print $fields['field_weight']->content;?>">
<h3 class="service-title">
        <?php print render($content['title']);?>
    </h3>
    <div class="service-description">
        <?php print render($content['field_body']);?>
    </div>
    <div class="service-price">
        <p><?php print  render($content['field_price']);?></p>
    </div>
</div>
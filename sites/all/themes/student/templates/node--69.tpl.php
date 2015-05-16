<div class="service-block service">
    <h3 class="service-title">
        <?php print render($content['title']);?>
    </h3>
    <div class="service-description">
        <?php print $fields['field_body']->content;?>
    </div>
    <div class="service-price">
        <p><?php print  $fields['field_price']->content;?></p>
    </div>
</div>

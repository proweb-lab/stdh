<div id="office">
    <div class="office-title">
        <h1 class="container">
            <?php print render($title); ?>
        </h1>
    </div>
    <div class="office-image">
        <?php print render($content['field_image']); ?>
    </div>
    <div class="office-information">
        <?php print $fields['field_information']->content; ?>
    </div>
    <div class="office-map">
        <?php print $fields['field_map']->content; ?>
    </div>
</div>

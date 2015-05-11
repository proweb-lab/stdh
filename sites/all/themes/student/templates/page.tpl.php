
<header id="navbar" role="banner" class="container">
    <div class="container">
        <div class="navbar-header">
            <?php if ($logo): ?>
                <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>


            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="social-block">
            <?php
            $social_block = module_invoke('block', 'block_view', '2');
            print render($social_block['content']);
            ?>
        </div>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <div class="navigation">
                <nav role="navigation">
                    <?php if (!empty($primary_nav)): ?>
                        <?php print render($primary_nav); ?>
                    <?php endif; ?>
                    <?php if (!empty($secondary_nav)): ?>
                        <?php print render($secondary_nav); ?>
                    <?php endif; ?>
                    <?php if (!empty($page['navigation'])): ?>
                        <?php print render($page['navigation']); ?>
                    <?php endif; ?>
                </nav>
            </div>
        <?php endif; ?>
        <?php print render($page['header']); ?>
    </div>

</header>
<?php if (drupal_is_front_page()) { ?>
    <div class="main-slider">
        <?php print views_embed_view('slider', 'block') ?>
    </div>
<?php } ?>
<div class="main-container container">
    <?php if (drupal_is_front_page()) { ?>
        <div class="welcome-block">
            <?php
            $about = node_view(node_load(8));
            print(drupal_render($about));
            ?>
        </div>
        <div class="block-universities">

            <div class="btn btn-test-universities btn-lg">
                <?php  $link_test = l(t('Test university orientation '),
                    'http://myqyas.monadsoft.com/startMyQyas.aspx',array('html' => TRUE, 'attributes' =>
                        array('target' => '_blank')));
                echo $link_test;?>
            </div>

            <div class="btn btn-universities btn-lg">
                <?php  $link_universities = l(t('Search In Universities'), '/universities');

                echo $link_universities;?>
            </div>
            <div class="btn btn-learn-turkish btn-lg">
                <?php  $link_learn_turkish = l(t('Learn Turkish'),
                    'http://ilanguages.org/ar/turkish_vocabulary.php',array('html' => TRUE, 'attributes' =>
                        array('target' => '_blank')));
                echo $link_learn_turkish;?>
            </div>
            <div class="btn btn-success-stories btn-lg">
                <?php  $link_Stories = l(t('Success Stories'), '');
                echo $link_Stories;?>
            </div>
        </div>
        <div class="offices-block container">
            <h2 class="block-title"><?php echo t('Study Abroad'); ?></h2>
    <?php print views_embed_view('office', 'front_block') ?>
        </div>

        <div class="front services-blocks container">
            <h2 class="block-title"><?php echo t('Our Services'); ?></h2>
                <?php print views_embed_view('services', 'front_block'); ?>
            <div class="service-buttom btn btn-lg">
                <?php
                $link = l(t('Go to All Services'), '/node/68');
                echo $link;
                ?>
            </div>
        </div>
<?php } ?>

    <div class="row">

<?php if (!empty($page['sidebar_first'])): ?>
            <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
            </aside>  <!-- /#sidebar-first -->
            <?php endif; ?>

        <section<?php print $content_column_class; ?>>
<?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
                <div class="page-title">
                    <h1 class="container">
                        <?php print t($title); ?>
                    </h1>
                </div>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
        </section>

<?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_second']); ?>
            </aside>  <!-- /#sidebar-second -->
            <?php endif; ?>
<div  class="back-to-top">
            <span class="glyphicon glyphicon-arrow-up"></span>
 </div>
    </div>
</div>
<footer class="footer">
<?php print render($page['footer']); ?>
</footer>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-55371821-1', 'auto');
    ga('send', 'pageview');

</script>
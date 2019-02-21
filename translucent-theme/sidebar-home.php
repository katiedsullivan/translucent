<?php 
if ( is_active_sidebar( 'homepage-sidebar' ) ) : ?>
    <div id="homepage-sidebar" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'homepage-sidebar' ); ?>
    </div> 
<?php endif; ?>
<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    	<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar( 'custom-header-widget' ); ?>
        </div>
    <?php else : ?>
    	<div class="chw-widget">
	    	<h2 class="chw-title">Custom Widget Area</h2>
	    	<aside>
	        This is a widget area. You can customize it to display whatever you like. Options include text, links, a searchbar, content archive, categories, and more.
	    	</aside>
    	</div>
    <?php endif; ?>
</div>
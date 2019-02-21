<?php 

function blog_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blog_resources');

?>
<?php
register_nav_menus( array(
	'primary-menu' => 'Primary Navigation Menu',
	'footer-menu' => 'Footer Menu',
) );
?>
<?php 
	function wpb_widgets_init() {
	 
	    register_sidebar( array(
	        'name'          => 'Blog Widget Area',
	        'id'            => 'custom-header-widget',
	        'before_widget' => '<div class="chw-widget">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h2 class="chw-title">',
	        'after_title'   => '</h2>',
	    ) );	 
}
add_action( 'widgets_init', 'wpb_widgets_init' );
	?>
<?php 
function wpb_widgets_init2() {
 
    register_sidebar( array(
        'name'          => 'Page Sidebar',
        'id'            => 'homepage-sidebar',
        'before_widget' => '<div class="home-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="hs-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init2' );
	?>
<?php
$bgargs = array(
	'default-color' => '000000',
	'default-image' => get_template_directory_uri() . '/images/mountains.jpg',
	'default-position-x' => 'center',
	'default-position-y' => 'center',
	'default-repeat' => 'no-repeat',
	'default-size' 	=> 'cover',
	'default-attachment' => 'fixed',
	'uploads' 		=> true,
);
add_theme_support( 'custom-background', $bgargs );
?>
<?php
function my_list_child_pages() {
	if (is_page()) {
		global $post;
		$args = 'echo=0&sort_column=menu_order&title_li=';
		// Check whether page is parent/child page
		$page = ($post->post_parent) ? $post->post_parent : $post->ID;
		$parent   = wp_list_pages( $args.'&include='.$page );
		$children = wp_list_pages( $args.'&child_of='.$page );
		// If the current page has/is child page
		$list = ($children) ? $children : '';
	}
	echo $list;
}
?>
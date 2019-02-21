<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<?php wp_head(); ?>		
	</head>

	<body <?php body_class(); ?>>
		<!-- site-header -->

	<div class="container-fluid">
		<div class="row">
				<header class="header-color site-header col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: url(<?php header_image() ?>) center;">
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
						<h2><?php bloginfo('description'); ?></h2>
				</header><!-- /site-header -->
		</div><!-- /row -->

		<div class="row">
			<div id="nav" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<?php wp_nav_menu( array(
						    'theme_location' => 'primary-menu'
						) ); ?>
			</div><!-- nav -->
		</div><!-- /row -->
<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		
		<div class="box logo">
			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
		<div class="area-banner-topo">
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		<?php endif; ?>
		</div>
		<div style="position:relative;float:left;width:600px">
			<h2 class="descricao-site"><?php bloginfo( 'description' ); ?></h2>
		</div>	
		<div style="position:relative;float:right;margin-top:26px">
			<img src="<?php echo get_template_directory_uri(); ?>/imagens/icone-facebook.jpg" />
			<img src="<?php echo get_template_directory_uri(); ?>/imagens/icone-twitter.jpg" />
			<img src="<?php echo get_template_directory_uri(); ?>/imagens/icone-instagram.jpg" />
			<img src="<?php echo get_template_directory_uri(); ?>/imagens/icone-google.jpg" />
		</div>
		
		<div class="box menu-conjunto">
			<div style="position:relative;float:left;">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>	
				</nav><!-- #site-navigation -->
			</div>
			<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
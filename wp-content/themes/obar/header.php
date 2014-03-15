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
<!-- Wysija START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="<?php echo  home_url(); ?>/wp-includes/js/jquery/jquery.js?ver=2.5.9.4"></script>
<script type="text/javascript" src="<?php echo  home_url(); ?>/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-pt.js?ver=2.5.9.4"></script>
<script type="text/javascript" src="<?php echo  home_url(); ?>/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.5.9.4"></script>
<script type="text/javascript" src="<?php echo  home_url(); ?>/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.5.9.4"></script>
<script type="text/javascript">
	/* <![CDATA[ */
	var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"<?php echo  home_url(); ?>/wp-admin/admin-ajax.php","loadingTrans":"Carregando..."};
	/* ]]> */
</script>
<script type="text/javascript" src="<?php echo  home_url(); ?>/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.5.9.4"></script>
<!--END Scripts-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=247493132095903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
		<div style="position:relative;float:left;width:570px">
			<h2 class="descricao-site"><?php bloginfo( 'description' ); ?></h2>
		</div>	
		<div class="social-media">
			<a href="http://www.facebook.com/OBarVirtual" class="facebook btn" title="Curta O Bar Virtual" target="_blank"> Facebook</a>
			<a href="http://www.twitter.com/obarvirtual" class="twitter btn" title="O Bar Virtual no Twitter" target="_blank"> Twitter</a>
			<a href="http://instagram.com/obarvirtual" class="instagram btn" title="O Bar Virtual no Instagram" target="_blank"> instagram</a>
			<a href="" class="google btn" title="O Bar Virtual no Google Plus" target="_blank"> Google Plus</a>
		</div>
		
		<div class="menu-conjunto">
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
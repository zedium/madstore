<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Madstore_woocomerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://github.com/zedium">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="container">	
		<div class="row topbar justify-content-between">
			<div class="col-md-6 col-sm-12 col-xs-12 justify-content-start">
				<p>	
					<i class="icon-phone"></i>
					<span>CALL US: +1 (987) 654 321</span>
				</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 justify-content-start">
				<div class="final-content-wrapper float-right">
					<a href="#" class=""><span class="has-right-delimiter">Login / Register</span></a>
					<a href="#" class=""><span class="has-right-delimiter">Account</span></a>
					<a href="#" class=""><span>Contact us</span></a>
				</div>
			</div>
		</div>
	</div>	
	<header id="header" class="site-header ">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-branding">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/statics/logo.png" />
					</div><!-- .site-branding -->
				</div>	
				<div class="col-md-6">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'madstore-woocomerce' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-md-3">

				</div>
			</div>
		</div>
	</header><!-- #masthead -->

<?php
/**
 * 
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icons/favicon.png">
	</head>

	<body <?php body_class(); ?>>

	<aside class="overlay" id="overlay">
		<div id="tools">
			<a href="#" id="search-toggle-mobile"><i class="icon-search-outline"></i></a>
		</div>

		<section>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile nav widgets") ) : ?>
			<?php endif;?>

			<nav role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
				<?php foundationpress_mobile_nav(); ?>
			</nav>

			<?php add_filter( 'get_search_form', 'extra_search_form' );
			get_search_form();
			remove_filter( 'get_search_form', 'extra_search_form' ); ?>
		</section>
	</aside>

	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar ">
			<div class="title-bar-left">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="mobile-logo" rel="home" >
					Chris Allen Design
				</a>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left show-for-large">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="site-logo" rel="home" >
						Chris Allen Design
					</a>
				</div>
				<?php foundationpress_top_bar_r(); ?>

				<?php get_search_form(); ?>
			</div>

			<div class="top-bar-right show-for-large">
				<ul class="menu">
					<li>
						<i class="icon-search-outline" id="search-toggle"></i>
					</li>         					
    			</ul>
    			
				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>

	<div class="button_container" id="toggle">
	  <span class="top"></span>
	  <span class="middle"></span>
	  <span class="bottom"></span>
	</div>

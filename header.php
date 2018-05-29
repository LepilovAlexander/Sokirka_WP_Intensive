<?php
/**
 * The header for our theme
 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intensiv
 */
global $intensiv_options;
$custom_logo = $intensiv_options['intensiv-logo']['url'];
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<section>
		<header class="inner">
			<div class="container">
				<div class="line-top">
					<div class="wither-w">
						<span class="cloud"><img src="<?php echo get_template_directory_uri() ?>/images/cloud.png" alt="" /></span>
						<span>18°c</span>
						<div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
							<div class="city-drop">
								<a href="#">Paris</a>
								<a href="#">Kopengagen</a>
								<a href="#">Berlin</a>
							</div>
						</div>
					</div>
					<div class="logo">
						<a href="<?php echo home_url('/') ?>"><?php if ($custom_logo): ?><img src="<?php echo esc_url($custom_logo) ?>" alt="" /><?php else: ?><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" /><?php endif; ?></a>
					</div>
					<div class="contacts">
						<?php if($intensiv_options['header-phone']): ?>
							<span><i class="fa fa-mobile"></i><?php echo esc_attr($intensiv_options['header-phone']) ?></span>
						<?php endif; ?>
						<?php if ($intensiv_options['header-email']): ?>
							<span><i class="fa fa-envelope"></i><?php echo esc_attr($intensiv_options['header-email']) ?></span>
						<?php endif;?>

					</div>
				</div>
				<nav class="main-nav in">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container' => 'ul',
						'menu_class' => 'nav-menu',
					) );
					?>
					<div class="search">
						<form method="GET" action="<?php echo home_url('/'); ?>" class="search-form">
							<input type="text" name="s" id="search-input" placeholder="Keywords"/>
							<button class="btn-search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</nav>
			</div>

		</header>

	</section>
	<div id="content" class="site-content">

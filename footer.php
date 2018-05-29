<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intensiv
 */
global $intensiv_options;
$custom_footer_logo = $intensiv_options['footer-logo']['url'];
?>

<footer>
	<div class="container">
		<div class="column-f">
			<a href="<?php echo home_url('/') ?>">
				<?php if ($custom_footer_logo): ?>
					<img src="<?php echo esc_url($custom_footer_logo) ?>" alt="" />
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri() ?>/images/logo-foo.png" alt="" />
					<?php endif; ?>
				</a>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem</p>
				<p>© 2014 All rights reserved</p>
			</div>
			<div class="column-s">
				<h3>Support</h3>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footerfirst',
					'menu_id'        => 'footer-menu',
					'container' => 'ul',
					'menu_class' => '',
				) );
				?>
			</div>
			<div class="column-t">
				<h3>Users information</h3>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footersecond',
					'menu_id'        => 'footer-menu-sec',
					'container' => 'ul',
					'menu_class' => '',
				) );
				?>
			</div>
			<div class="column-l">
				<h3>Contacts</h3>
				<ul>
					<li>
						<?php if($intensiv_options['adress']): ?>
							<a href="#">
								<i class="fa fa-globe"></i>
								<?php echo esc_attr($intensiv_options['adress']) ?>
							</a>
						<?php endif; ?>
					</li>
					<li>
						<?php if($intensiv_options['header-phone']): ?>
							<a href="tel:<?php echo esc_attr($intensiv_options['header-phone']) ?>">
								<i class="fa fa-phone"></i>
								<?php echo esc_attr($intensiv_options['header-phone']) ?>
							</a>
						<?php endif; ?>
					</li>
					<li>
						<a href="mailto:<?php echo esc_attr($intensiv_options['header-email']) ?>">
							<?php if ($intensiv_options['header-email']): ?>
								<span><i class="fa fa-envelope-o"></i><?php echo esc_attr($intensiv_options['header-email']) ?></span>
							<?php endif;?>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</footer>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'intensiv' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'intensiv' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'intensiv' ), 'intensiv', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div>-->

<?php wp_footer(); ?>

</body>
</html>

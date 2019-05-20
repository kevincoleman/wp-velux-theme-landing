<?php
/**
 *
 * Template Name: Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Primer
 * @since   1.0.0
 */
?>


<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/primer/landing-style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header>
			<div>
				<img src="/wp-content/uploads/2019/05/CP.png" alt="Complete Pest Prevention Logo">
				<h1>Complete Pest Prevention</h1>
			</div>
			<!-- Wordpress Landing Menu to go here -->
		</header>
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
						<?php if ( comments_open() || get_comments_number() ) : ?>
							<?php comments_template(); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar( 'tertiary' ); ?>

</div><!-- #content -->

<?php

/**
 * Fires before the `<footer>` element.
 *
 * @since 1.0.0
 */
do_action( 'primer_before_footer' );
?>
<footer id="colophon" class="site-footer">
	<div class="site-footer-inner">
		<?php
		do_action( 'primer_footer' );
		?>
	</div><!-- .site-footer-inner -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
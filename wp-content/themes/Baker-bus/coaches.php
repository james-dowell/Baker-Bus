<?php
/*
Template Name: Coaches
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Baker Bus
 * @since 		Baker Bus 1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<section class="inner-wrapper">
<section>
		<aside>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Coaches Sidebar') ) : ?>  
		<?php endif; ?>
		</aside> 
</section>
<section class="main-content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section class="main-content-post">
	<h2><span><?php the_title(); ?></span></h2>
	<section class="featured-image"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?></section>
	<?php the_content(); ?>
	</section>
	<?php //comments_template( '', true ); ?>
	<?php endwhile; ?>
</section>
</section>
<style>
.header-links ul li a {
	padding: 10px;
	background-color: #0076c0!important;
	color: #ffffff!important;
}
.header-links ul li:nth-child(2) a {
	background-color: #656870!important;
	color: #ffffff!important;	
}
</style>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
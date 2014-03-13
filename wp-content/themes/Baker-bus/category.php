<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<section class="inner-wrapper">
<section>
	<aside>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bus Sidebar') ) : ?>  
		<?php endif; ?>
	</aside> 
</section>
<section class="post-content">
	<?php if ( have_posts() ): ?>
	<h2><?php echo single_cat_title( '', false ); ?></h2>
	<ul class="category-ul">
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<span class="post-info"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<section class="post-thumb"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?></section>
				<?php 		$content = get_the_content();
		$trimmed_content = wp_trim_words( $content, 100, '<a href="'. get_permalink() .'"> ...Read More</a>' );
		echo $trimmed_content; ?>
			</article>
		</li>
	<?php endwhile; ?>
	</ul>
	<?php else: ?>
	<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
	<?php endif; ?>
	<section class="pagination">
		<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
	</section>
</section>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
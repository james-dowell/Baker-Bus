<?php
/*
Template Name: Homepage
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
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Slider') ) : ?>  
		<?php endif; ?>
		<section class="information">
			<h2><span>Information</span></h2>
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Information') ) : ?>  
				<?php endif; ?> 
			</ul>
		</section>
		<section class="news">
			<h2><span>Latest News</span></h2>
			<ul>
				<?php $cat_id = 3; //the certain category ID
				$latest_cat_post = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_id)));
				if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>				
				<li>
					<span><?php the_time('j'); ?></span><span><?php the_time('F'); ?></span>
					<article>
						<h3><?php the_title(); ?></h3>
						<p><?php echo substr(strip_tags($post->post_content), 0, 100); ?>...</p>
						<section class="news-read-more">
							<a href="<?php the_permalink(); ?>">read more</a>
						</section>
					</article>
				</li>

				<?php endwhile; endif; ?>
		 	</ul>
		</section>
	</section>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
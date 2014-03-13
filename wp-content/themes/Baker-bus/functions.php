<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Baker Bus
 	 * @since 		Baker Bus 1.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */


	/* ========================================================================================================================
	
	Menus :)
	
	======================================================================================================================== */

	register_nav_menu('primary', __('Primary Menu', 'rs'));

	register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'rs' ));

	/* ========================================================================================================================
	
	Widgets :)
	
	======================================================================================================================== */

	register_sidebar(array(
			'name' => 'Holidays Sidebar',
			'before_widget' => '<section class="side-widget">',  
      		'after_widget'  => '</section>',  
      		'before_title'  => '<h2><span>',  
      		'after_title'   => '</span></h2>'
		));

	register_sidebar(array(
			'name' => 'Coaches Sidebar',
			'before_widget' => '<section class="side-widget">',  
      		'after_widget'  => '</section>',  
      		'before_title'  => '<h2><span>',  
      		'after_title'   => '</span></h2>'
		));

	register_sidebar(array(
			'name' => 'Bus Sidebar',
			'before_widget' => '<section class="side-widget">',  
      		'after_widget'  => '</section>',  
      		'before_title'  => '<h2><span>',  
      		'after_title'   => '</span></h2>'
		));

	register_sidebar(array(
			'name' => 'Home Slider',
			'before_widget' => '',  
      		'after_widget'  => '',  
      		'before_title'  => '',  
      		'after_title'   => ''
		));

	register_sidebar(array(
			'name' => 'Home Information',
			'before_widget' => '<li>',  
      		'after_widget'  => '</li>',  
      		'before_title'  => '<h2>',  
      		'after_title'   => '</h2>'
		));

	register_sidebar(array(
			'name' => 'Footer',
			'before_widget' => '<section class="footer-widget">',  
      		'after_widget'  => '</section>',  
      		'before_title'  => '<h3>',  
      		'after_title'   => '</h3>'
		));


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_script( 'tileSlider', get_template_directory_uri().'/js/tile-slider-js.js', array( 'jquery' ));
		wp_enqueue_script( 'tileSlider' );

		wp_register_script( 'scroller', get_template_directory_uri().'/js/scrolltop.js', array( 'jquery' ));
		wp_enqueue_script( 'scroller' );

		wp_register_script( 'gmaps', "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false", '');
		wp_enqueue_script( 'gmaps' );

		wp_register_script( 'googlemaps', get_template_directory_uri().'/js/googlemaps.js', '');
		wp_enqueue_script( 'googlemaps' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

    	wp_register_style( 'tileSliderStyles', get_stylesheet_directory_uri().'/css/slider/tile-slider-styles.css', '', '', 'screen' );
        wp_enqueue_style( 'tileSliderStyles' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
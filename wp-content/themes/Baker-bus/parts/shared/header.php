
	<?php bloginfo( 'description' ); ?>
 	<section class="wrapper">
		<header>
			<section class="header-links">
				<ul>
					<li><a href="http://wffd.james-dowell.com/tickets-fares/">bus</a></li>
					<li><a href="http://wffd.james-dowell.com/bespoke-hire/">coaches</a></li>
					<li><a href="http://wffd.james-dowell.com/bespoke-holidays/">holidays</a></li>
				</ul>
			</section>
			<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/baker-bus-logo.png"></a></h1>
			
			<section class="responsive-nav">
					<ul>
						<li><a href="#" class="nav-toggle"><img width="20" src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/nav-icon.png"></a></li>
					
					 <?php 
						/*$defaults = array(
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
						);

						wp_nav_menu($defaults); */

						wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'nav-menu' ) );?>
					</ul>
				</section>

			<nav>

				<?php get_search_form(); ?>
				<ul>
					<li><a href="<?php echo home_url(); ?>"><img width="20" src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/home.png"></a></li>
				
				 <?php 
					$defaults = array(
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
					);

					wp_nav_menu($defaults); ?>
				</ul>
			</nav>
			<section style="clear:both;"></section>
		</header>

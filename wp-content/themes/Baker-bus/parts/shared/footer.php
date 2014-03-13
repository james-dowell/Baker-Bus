		</section>
<section style="clear:both"></section>
	<footer>
		<section class="footer-wrapper">
			<section class="footer-top">
				<section class="footer-inner">
					<ul>
						<li>
							<ul class="footer-column">
								<li><a href="http://wffd.james-dowell.com/tickets-fares/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/baker-bus-white-logo.png"></a></li>
								<li><a href="http://wffd.james-dowell.com/bespoke-hire/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/baker-coaches-white-logo.png"></a></li>
								<li><a href="http://wffd.james-dowell.com/bespoke-holidays/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bakers-holidays-white-logo.png"></a></li>
							</ul>
						</li>
						<li>
							<ul class="footer-column footer-recent-posts">
								<li><h3>Useful Links</h3></li>
								<li><a href="http://www.traveline.info">traveline</a></li>
								<li><a href="http://www.cheshireeast.gov.uk">cheshire east council</a></li>
								<li><a href="http://www.stokebus.info">stoke city council</a></li>
								<li><a href="http://www.staffordshire.gov.uk">stafforshire council</a></li>
								<li><a href="http://www.gmpte.com">gmpte</a></li>
								<li><a href="http://www.nationalrail.co.uk">national rail</a></li>
								<li><a href="http://www.londonmidland.com">london midland</a></li>
								<li><a href="http://www.northernrail.org ">northern rail</a></li>
							</ul>
						</li>
						<li>
							<ul class="footer-column footer-recent-posts">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>  
										<?php endif; ?>
							</ul>
						</li>
						<li>
							<ul class="footer-column footer-contact">
								<li><h3>Contact Information</h3></li>
								<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/home-blue.png">Bakers Coaches, The Coach Travel Centre, Prospect Way, Victoria Business Park, Biddulph, Stoke-on-Trent, ST8 7PL</li>
								<li><a href="https://www.facebook.com/pages/BakerBus/134947926526045?ref=ts&fref=ts" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/facebook.png">Baker Bus Facebook</a></li>
								<li><a href="https://twitter.com/bakerbus" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/twitter.png">@bakerbus</a></li>
							</ul>
						</li>
					</ul>
				</section>
			</section>
			<section class="footer-bottom">
				<section class="footer-inner">
					<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
				</section>
			</section>
		</section>
	</footer>	

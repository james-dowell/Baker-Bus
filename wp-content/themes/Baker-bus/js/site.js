
	jQuery(document).ready(function($) {

		$(".sub-menu").hide();

		$(".menu-item-has-children").mouseenter(function () {
			$(this).find(".sub-menu").stop().dequeue().slideDown(800, 'swing');
		});
		$(".menu-item-has-children").mouseleave(function() {
			$(this).find(".sub-menu").stop().dequeue().slideUp(800, 'swing');
		});

		$("body").scrolltotop();

		$(".nav-toggle").click(function(e) {
			e.preventDefault();

			$(".menu-responsive-menu-container").slideToggle("slow");
		})

	});


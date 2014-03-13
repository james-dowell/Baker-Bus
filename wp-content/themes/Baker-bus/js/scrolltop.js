(function($) {$.fn.scrolltotop = function () {
	var bodyHeight;
	var scrollHeight;
	var windowHeight;

	function loop() {
		setInterval(function() {
			checker();
		}, 700);
	}

	function checker() {
		bodyHeight = $(this).height();
		scrollHeight = $(this).scrollTop();
		windowHeight = window.innerHeight;

		if (scrollHeight > windowHeight) {
			showScroll();
		} else {
			hideScroll()
		}
	}

	function showScroll() {
		$(".scroll-top").fadeIn("slow");
	}

	function hideScroll() {
		$(".scroll-top").fadeOut("slow");
	}

	function create() {
		var html = "<section class='scroll-top' style='display:none;'><a href='#'><img width='40' src='http://wffd.james-dowell.com/images/scrolltop/arrow.png'></a></section>";
		$("body").append(html);
		$(".scroll-top").css("position", 'fixed').css("bottom", "20px").css("right", "20px");
		$(".scroll-top").click(function (e) {
			e.preventDefault();
			$("body").animate({ scrollTop: "0px" });
		});
	}

	function init() {
		create();
		checker();
		loop();
	}

	init();
}}(jQuery));
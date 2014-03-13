(function($) {$.fn.tileslider = function () {
	
	var tileIndex = 0;	
	var prevTileIndex = null;

	var tileArray = [];
	var slideArray = [];

	var tileOptions = new Object();
		//tileOptions.width = 1100;
		//tileOptions.height = 300;
		tileOptions.animation = "slide";
		tileOptions.newsflash = false;
		tileOptions.newsflashtext = "This is the test news flash";
		tileOptions.newsflashlink = "link";

	switch (tileOptions.animation) {
		case 'slide':
			animation = 'marginLeft';
		break;
		case 'fade':
			animation = 'opacity'
		break;
		default:
			animation = 'marginLeft';

	}

	var ts_slider_width = 600;
	var resposive_no_slider = false;
	var slider_pause = false;
	var loop_interval;



	function initialize() {
		//FILL ARRAYS
		$(".ts-slider-left-ul li").each(function () {
			tileArray.push($(this));
		});
		$(".ts-viewer ul li").each(function () {
			slideArray.push($(this));
		});

		//SET INDEXES
		tileSlide(tileIndex, prevTileIndex);
		prevTileIndex = tileIndex;
		tileIndex++;

		//READ AND EXECUTE OPTIONS
		var margin = $(".ts-viewer").width() + 120;
		$(".ts-viewer ul li a").css('margin-left', margin + "px");

		//BEGIN SLIDING
		start();
	}

	function getCurrenWidth() {
		ts_slider_width = $(".ts-viewer").width();

		/*if ($(".slider-inner").width() < 660) {
			resposive_no_slider = true;
			$(".ts-slider-left-ul li").removeClass(".ts-active");
		}*/
	}



	function tileSlide(tileI, prevTileI, slider_pause) {
		getCurrenWidth();
		if (slider_pause == true) {

		} else {
			if (prevTileI != null) {
				tileArray[prevTileI].removeClass("ts-active");
			}	
			tileArray[tileI].addClass("ts-active");
			var slideArrayCompareLength = slideArray.length - 1;

			var checkForAhead = tileI - prevTileI;

			if (prevTileI > tileI) {
				var slidesInFront = prevTileI - tileI;
				for (var i = 0; i < slidesInFront; i++) {

					var j = prevTileI - i;

					slideArray[j].find("a").animate({
						marginLeft: ts_slider_width + 'px'
					});
				}

			} else if (checkForAhead > 1) {
				for (var i = 0; i < checkForAhead; i++) {
					var j = tileI - i;
					slideArray[j].find("a").animate({
						marginLeft: 0
					}, 'slow');
				}
			} else if (slideArrayCompareLength == prevTileI) {
				
				for (var i = 0; i < slideArrayCompareLength; i++) {
					var j = slideArrayCompareLength - i;
					slideArray[j].find("a").animate({
						marginLeft: ts_slider_width + 'px'
					});
				}
			} else {
				slideArray[tileI].find("a").animate({
					marginLeft: 0
				}, 'slow');
			}
		}
	}

	function start() {
		loop_interval = setInterval(loop, 3000);
	}

	function loop() {
		if (tileIndex >= tileArray.length) {
			tileIndex = 0;
		}
		tileSlide(tileIndex, prevTileIndex, slider_pause);
		prevTileIndex = tileIndex;
		tileIndex++;
	}

	function init() {
		if (tileOptions.newsflash == true) {
			var newsHTML = "<section class='ts-newsflash'><a href='" + tileOptions.newsflashlink + "'>" + tileOptions.newsflashtext + "</a></section>";
			$(".slider-inner").prepend(newsHTML);
		}
			
		initialize();
		
		$(".b-tile").click(function(e) {
			e.preventDefault();
			tileIndex = $(this).parent().index()
			prevTileIndex = $(".ts-active").index();
			tileSlide(tileIndex, prevTileIndex, slider_pause);	
		});

		$(".ts-viewer").hover(function () {
			clearInterval(loop_interval);
		}, function () {
			start();
		});

	};

	init();
}}(jQuery));
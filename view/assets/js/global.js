$( function() {
	init_slideHeader();
});
function init_slideHeader() {
	var slides = document.querySelectorAll('#slides .slide');
	var dots = document.querySelectorAll('#dots .dot');
	var currentSlide = 0;
	var dotSlide = 0;
	var slideInterval = setInterval(nextSlide,6000);
	function nextSlide() {
		//stopOnce = $('#slides').attr('stop');
		stopOnce = document.getElementById("slides").getAttribute("stop");
		if(stopOnce == 'true') {
			document.getElementById("slides").setAttribute('stop', 'false');
			//$('#slides').attr('stop', 'false');
		} else {
			slides[0].className = 'slide';
			slides[1].className = 'slide';
			slides[2].className = 'slide';
			slides[3].className = 'slide';
			slides[4].className = 'slide';
			currentSlide = (currentSlide+1)%slides.length;
			slides[currentSlide].className = 'slide showing';

			dots[0].className = 'dot';
			dots[1].className = 'dot';
			dots[2].className = 'dot';
			dots[3].className = 'dot';
			dots[4].className = 'dot';
			dotSlide = (dotSlide+1)%slides.length;
			dots[dotSlide].className = 'dot selected';
		}
	}
	$('#dot1').click( function() { $('#slides').attr('stop', 'true'); displaySlide(0); })
	$('#dot2').click( function() { $('#slides').attr('stop', 'true'); displaySlide(1); })
	$('#dot3').click( function() { $('#slides').attr('stop', 'true'); displaySlide(2); })
	$('#dot4').click( function() { $('#slides').attr('stop', 'true'); displaySlide(3); })
	$('#dot5').click( function() { $('#slides').attr('stop', 'true'); displaySlide(4); })
	function displaySlide(slide) {
		var slides = document.querySelectorAll('#slides .slide');
		currentSlide = slide;
		slides[0].className = 'slide';
		slides[1].className = 'slide';
		slides[2].className = 'slide';
		slides[3].className = 'slide';
		slides[4].className = 'slide';
		currentSlide = (currentSlide=slide)%slides.length;
		slides[currentSlide].className = 'slide showing';

		var dots = document.querySelectorAll('#dots .dot');
		dotSlide = slide;
		dots[0].className = 'dot';
		dots[1].className = 'dot';
		dots[2].className = 'dot';
		dots[3].className = 'dot';
		dots[4].className = 'dot';
		dotSlide = (dotSlide=slide)%slides.length;
		dots[dotSlide].className = 'dot selected';
	}
}

$(document).ready(function() {
    $('#Carousel1').carousel({
        interval: 3000
    })
});
$(document).ready(function() {
    $('#Carousel2').carousel({
        interval: 3000
    })
});
$(document).ready(function() {
    $('#Carousel3').carousel({
        interval: 3000
    })
});
$(document).ready(function() {
    $('#Carousel4').carousel({
        interval: 3000
    })
});

$(function() {
	$('.arrow-wrap').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 1000, 'linear');
	});
});

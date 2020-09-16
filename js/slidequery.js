(function($) {
// Tangkap semua objek yang dibutuhkan
	var $slider = $('#slider'),
		$caption = $slider.find('figcaption'),
		$container = $slider.find('.container'),
		$nav = $('#slider-nav'),
		$slide = $container.children(),
		s_length = $slide.length,
		autoSlide = null;

	$slide.each(function(index) {
		var i = index + 1;
		$nav.append('<a href="#slide-'+i+'">'+i+'</a>');
		$(this).attr('id', 'slide-'+i);
	});

	$nav.find('a').on("click", function() {
		$nav.find('.active').removeClass('active');
		$(this).addClass('active');
		var pos = $(this).index() * $slider.width(),
			text = $slide.eq($(this).index()).attr('alt');
		$caption.stop().animate({bottom:'-100px'}, 400);
		// Sembunyikan semua slide dengan efek .fadeOut() ...
		// ... kemudian tampilkan slide ke-`$(this).index()` dengan efek .fadeIn()
		$slide.fadeOut(600).eq($(this).index()).fadeIn(600, function() {
			$caption.html(text).stop().animate({bottom:'0'}, 400);
		});
		clearInterval(autoSlide);
		autoSlide = setInterval(slideShow, 3000);
		return false;
	}).first().addClass('active');
	$caption.html($slide.first().attr('alt')).stop().animate({bottom:'0'}, 600);

	function slideShow() {
		if ($nav.find('.active').next().length) {
			$nav.find('.active').next().trigger("click");
		} else {
			$nav.find('a').first().trigger("click");
		}
	}

	$(window).on("load", function() {
		// Hilangkan background loading pada '#slider'
		$slider.css('background-image','none');
		// Tampilkan '.container', 'figcaption' dan '#slide-nav' saat halaman (semua gambar) telah termuat!
		$container.show();
		$caption.show();
		$nav.css('opacity',1);
		// lalu jalankan interval slideshow...
		autoSlide = setInterval(slideShow, 3000);
	});

})(jQuery);
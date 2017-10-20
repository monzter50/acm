$(document).ready(function(){
	
	var scroll_start = 0;
	var startchange = $('body');
	var offset = startchange.offset();
	if (startchange.length){
		$(document).scroll(function() { 
			scroll_start = $(this).scrollTop();
			if(scroll_start > offset.top) {
				$(".navbar").addClass('scrolled');
			} else {
				$('.navbar').removeClass('scrolled');
			}
		});
	}

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
});

	$('.video').on('click', function () {
		event.preventDefault();
		var theModal = $(this).data("target");
		var videoSRC = $(this).attr("data-theVideo");
		var videoSRCauto = videoSRC + "?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1";
		$(theModal + ' iframe').attr('src', videoSRCauto);
		$(theModal).modal('show');
		// $(theModal + ' modal').click(function () {
		// 	$(theModal + ' iframe').attr('src', videoSRC);
		// });
		$(theModal).on('show.bs.modal', function () {
			console.log('triggered modal');
		});
		$(theModal).on('hidden.bs.modal', function () {
			$(theModal + ' iframe').attr('src', videoSRC);
			console.log('modal-closed');
	});

});

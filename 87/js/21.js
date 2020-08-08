$(document).ready(function() {
	var accordion = $('.panel-heading a');
	accordion.on('click', function() {
		if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      accordion.removeClass('active');
      $(this).addClass('active');
    };
	});
  
  $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
});
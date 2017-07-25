(function($){
    $(window).on("load",function(){
        $(".admin-sidebar").mCustomScrollbar({
          axis:"x",
          theme: "minimal"
        });
    });
})(jQuery);
$(document).ready(function(){
  // Table
  $('#table-blogIT').DataTable();
  // input
  $('input').focus(function(){
		var valType = $(this).attr('type');
		var getInput = 'input[type="'+valType+'"]';
		$(getInput).next().addClass('active');
		$(getInput).prev().addClass('active');
	});
	$('input').focusout(function(){
		var typeVal = $(this).attr('type');
		var getInput = 'input[type="'+typeVal+'"]';
		var check = $(getInput).val();
		if(!check || check===0) {
			$(this).next().removeClass('active');
			$(this).prev().removeClass('active');
		}
	});
  // alert success
  $("#alert").fadeOut(7000);
});

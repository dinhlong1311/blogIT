(function($){
    $(window).on("load",function(){
        $(".admin-sidebar").mCustomScrollbar({
          axis:"x",
          theme: "minimal"
        });
    });
})(jQuery);
$(document).ready(function(){
  $('#table-blogIT').DataTable();
});

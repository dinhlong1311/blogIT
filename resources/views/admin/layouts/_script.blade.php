<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script>
  (function($){
      $(window).on("load",function(){
          $(".admin-sidebar").mCustomScrollbar({
            axis:"x",
            theme: "minimal"
          });
      });
  })(jQuery);
</script>

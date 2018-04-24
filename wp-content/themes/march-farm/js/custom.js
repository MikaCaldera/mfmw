jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
  // Videotext module js
  $('#play-video').on('click', function(ev) {
    $('#play-video img').css("display","none");
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
  });
  // Calculate height and width of responsive video thumb in order to get a responsive YT iframe
  $vidHeight = $("#measure").height();
  $vidWidth = $("#measure").width();
  $("#video").attr('width', $vidWidth);
  $("#video").attr('height', $vidHeight);

  function hideVideo(){
    $('#play-video img').css("display","none");
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
  }

});


var sizer = $( window ).width();

if(sizer > 768){

	$("ul.sub-menu").css("display","block");
}

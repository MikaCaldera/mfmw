jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
  // Videotext module js  ---- DROP Mikes edits here.
  $(document).ready(function(){
    $('.video-embed-image').click(function(e){
      var videokey = $(this).data('videokey');
      var videourl = $(this).data('videourl');
      var imgwidth = $(this).width();
      var imgheight = $(this).height();
      console.log(imgwidth + imgheight);
      var videoposter =  $('.video-poster[data-videoposterkey="'+videokey+'"]');
      var html = '<iframe class="video-embed-iframe" width="'+imgwidth+'" height="'+imgheight+'" src="'+videourl+'?autoplay=1" feature="oembed&quot;" frameborder="0"  allowfullscreen=""></iframe>';
      console.log(html);
      videoposter.html(html);
      var videotext = $('.videotext[data-videotext="'+videokey+'"]');
      videotext.hide();
    });
  });

});


// var sizer = $( window ).width();
//
// if(sizer > 768){
//
// 	$("ul.sub-menu").css("display","block");
// }

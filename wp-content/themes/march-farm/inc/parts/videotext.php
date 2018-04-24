<!-- Video with Text -->
<div class="videotext">
  <section class="container" >
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="video-wrapper">
          <div class="video-poster"><a href="#video" id="play-video"><img id="measure" src="<?php the_sub_field('video_poster'); ?>"></a></div>
           <iframe id="video" width="920" height="402" src="https://www.youtube.com/embed/GdSxFRq5BeQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="content"> <!-- This needs to be css -->
         <h2><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('descriptions'); ?></p>
          <a class="justify-content-center" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
</div>



<!-- 
echo ACF fields into the data-elements #1 being the key like, 1,2,3 iterator from ACF 
so that this can be called multiple times
echo the youtube URL into the data-videourl

has to be an embed link 

--> 
<div class="col-lg-10 col-md-12">
    <div class="video-wrapper">
      <!--echo acf for the #1 in the IDs-->
      <div class="video-poster" data-videoposterkey="1">  
        <img class="video-embed-image"src="http://marchfarm.wpengine.com/wp-content/uploads/2018/03/mf-herofront.png" data-videokey="1" data-videourl="https://www.youtube.com/embed/GdSxFRq5BeQ?rel=0">
      </div>  
    </div>
    <div class="content videotext" data-videotext="1"><!-- ACF KEY -->
     <h2>Video Module with Text <!-- ACF TEXT FIELD --></h2>
      <p></p>
      <a class="justify-content-center" href="https://www.google.com/">
        Video CTA LInk <!-- ACF TEXT FIELD -->
      </a>
    </div>
  </div>


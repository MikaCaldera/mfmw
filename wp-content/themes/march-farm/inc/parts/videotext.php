<!-- Video with Text -->

<!--
echo ACF fields into the data-elements #1 being the key like, 1,2,3 iterator from ACF
so that this can be called multiple times
echo the youtube URL into the data-videourl

has to be an embed link

-->
<div class="videotext">
  <section class="container" >
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="video-wrapper">
          <?php
            $videoid = get_sub_field('video_id');
            $videourl = "https://www.youtube.com/embed/" . $videoid;
          ?>
          <div class="video-poster" data-videoposterkey="1">
            <img class="video-embed-image" src="<?php the_sub_field('video_poster'); ?>" data-videokey="1" data-videourl="<?= $videourl; ?>">
          </div>
        </div>
        <div class="content videotext" data-videotext="<?php the_sub_field('number'); ?>">
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
        <a class="justify-content-center" href="<?php the_sub_field('link_url'); ?>">
          <?php the_sub_field('link_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

</div>

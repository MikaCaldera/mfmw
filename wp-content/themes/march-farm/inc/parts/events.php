<!-- Events Cards -->
<div class="eventhold">
  <section class="container">
    <h1 class="my-4 text-center text-lg-center"><?php the_sub_field('section_title'); ?></h1>
    <div class="row justify-content-start intro">
      <div class="col-lg-7">
        <h1 class="display-4"><?php the_sub_field('title'); ?></h1>
        <p><?php the_sub_field('description'); ?></p>
      </div>
    </div>
      <?php if (have_rows('event')):?>
    <div class="row justify-content-center events">
        <?php while (have_rows('event')) : the_row();
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $date = get_sub_field('date');
              $time = get_sub_field('time');
              $linkurl = get_sub_field('link_url');
        ?>
      <div class="col-lg-4 col-sm-6">
        <div class="card h-100">
          <a href="<?= $linkurl; ?>">   <!-- This is supposed to be an acf link  -->
            <img class="card-img-top" src="<?= $image; ?>" alt="">
            <div class="card-body">
              <h4 class="card-title">
              <?= $title; ?>
              </h4>
              <p class="card-text">
                <span><?= $date; ?></span>
                <span><?= $time; ?></span>
              </p>
            </div>
          </a>
        </div>
      </div>
        <?php endwhile; ?>
    </div>
        <?php endif; ?>
    <!-- Button  -->
    <div class="row justify-content-md-center">
      <a href="<?php the_sub_field('link_url'); ?>">
        <button type="button" class="btn btn-light btn-lg"><?php the_sub_field('link_text'); ?></button>
      </a>
    </div>
  </div>
</section>
</div>

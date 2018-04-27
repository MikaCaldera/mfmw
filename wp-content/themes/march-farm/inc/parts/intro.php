<!-- Introduction Section-->
<div class="intro">
 <?php if (have_rows('intro')):?>
    <section class="container blurbhold" >
      <?php while (have_rows('intro')) : the_row();
          $title = get_sub_field('title');
          $content = get_sub_field('content');
         ?>
      <div class="row blurb mb-3">
        <div class="col-lg-8">
          <h1 class="blurb-header"><?= $title; ?></h1>
          <p><?= $content; ?></p>
        </div>
        <div class="col-lg-4">
            <img class="picture" src="<?= $picture; ?>" alt="">
        </div>
      </div>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>
</div>
<!-- /blurb -->



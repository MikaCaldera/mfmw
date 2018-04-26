<!-- Blurb Section -->
<div class="gray-section">
 <?php if (have_rows('blurb')):?>
  <section class="container blurbhold" >
        <?php while (have_rows('blurb')) : the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $picture = get_sub_field('picture');
        ?>
    <div class="row">
      <div class="col-lg-6">
        <h1 class="blurb-header"><?= $title; ?></h1>
        <p><?= $content; ?></p>
      </div>
      <div class="col-lg-6">
        <img class="picture" src="<?= $picture; ?>" alt="">
      </div>
    </div>
        <?php endwhile; ?>
  </section>
<?php endif; ?>
</div>
<!-- /blurb -->

<!-- Highlights Cards -->
<section class="container highlights">
  <h1 class="my-4 text-center text-lg-center"><?php the_sub_field('section_title'); ?></h1>
  <div class="row justify-content-center highhold">
    <?php if (have_rows('highlight')):?>
    <?php while (have_rows('highlight')) : the_row();
    $photo = get_sub_field('photo');
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $button_cta = get_sub_field('button_cta');
    $button_link = get_sub_field('button_link');
    ?>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <a class="card-img-hold href="<?= $button_link; ?>">
          <img class="card-img-top"  width-"200px" src="<?= $photo; ?>" alt="Card image cap">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $title; ?></h5>
          <p class="card-text"><?= $description; ?></p>
          <a href="<?= $button_link; ?>" class="btn btn-light"><?= $button_cta; ?></a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
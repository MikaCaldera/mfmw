<?php if (have_rows('rightimgblurb')):?> 
        <?php while (have_rows('rightimgblurb')) : the_row();
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $content = get_sub_field('content');
        ?>
<!-- Callout -->
<div class="calloutright">
    <section class="container-fluid callbox">
        <div class="row">
            <div class="col-lg-6 col-md-12 flower d-flex justify-content-between">
              <div class="content">
                <div>
                  <h2><?= $title; ?></h2>
                  <div class="intro">
                    <p><?= $content; ?></p>
                  </div>
                </div>
              </div>
           </div>
           <div class="col-lg-6 col-md-12">
              <img class="img-fluid" alt="Responsive image" src="<?= $image; ?>">
           </div>
    </div>
  </section>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- /callout -->

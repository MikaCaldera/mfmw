<!-- Gallery Square Section -->
<section class="gallery" >
  <div class="row">
    <div class="container-fluid">
      <h1 class="my-4 text-center text-lg-center"><?php the_sub_field('section_title'); ?></h1>
      <div class="row text-center text-lg-center">
        <?php if (have_rows('images')):?>
        <?php while (have_rows('images')) : the_row();
        $image = get_sub_field('image'); ?>

          <?php if( !empty($image) ): ?>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="<?= $image; ?>" class="d-block mb-4 h-100" data-featherlight="image">
              <img class="img-fluid" src="<?= $image; ?>" alt="">
            </a>
          </div>
          <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
    <?php if (have_rows('square_gal_btn')):?>
    <?php while (have_rows('square_gal_btn')) : the_row();
      $sqbtnbtn_text = get_sub_field('square_gal_btn_text');
      $sqbtntypeoflink = get_sub_field('square_gal_type_of_link');

      if ($sqbtntypeoflink == "page")
      {
        $button = get_sub_field('square_gal_page_link');
        $target = '_self';
      }
      elseif ($typeoflink == "url")
      {
        $button = get_sub_field('square_gal_url_link');
        $target = '_blank';
      }
      elseif ($typeoflink == "file")
      {
        $button = get_sub_field('square_gal_file_link');
        $target = '_blank';
      }
      elseif ($typeoflink == "anchor")
      {
        $button = get_sub_field('square_gal_anchor');
        $target = '_self';
      }
      else
      {

      }
      ?>
      <?php echo $page; ?>
      <div class="row justify-content-md-center">
            <a target="<?= $target; ?>" href="<?= $button; ?>">
              <button type="button" class="btn btn-light btn-lg"><?= $sqbtnbtn_text; ?></button>
            </a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
</section>
<!-- /Gallery -->

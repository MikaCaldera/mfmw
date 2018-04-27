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
  <?php
  $btn_text = get_sub_field('btn_text');
  $typeoflink = get_sub_field('type_of_link');
  $page = get_sub_field('page_link');
  $url = get_sub_field('url_link');
  $file = get_sub_field('file_link');
  $anchor = '#'. get_sub_field('anchor_link');


  if ($typeoflink == "page")
  {
    $buttonlink = $page;
    $target = '_self';
  }
  elseif ($typeoflink == "url")
  {
    $buttonlink = $url;
    $target = '_blank';
  }
  elseif ($typeoflink == "file")
  {
    $buttonlink = $link;
    $target = '_blank';
  }
  elseif ($typeoflink == "anchor")
  {
    $buttonlink = $anchor;
    $target = '_self';
  }
  else
  {

  }
  ?>
  <?php if( !empty($btn_text) ): ?>
  <div class="row justify-content-md-center">
        <a target="<?= $target; ?>" href="<?= $buttonlink; ?>">
          <button type="button" class="btn btn-light btn-lg"><?= $btn_text ?></button>
        </a>
  </div>
  <?php endif; ?>
</section>
<!-- /Gallery -->

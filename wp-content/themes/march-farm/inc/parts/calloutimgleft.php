
    <?php if (have_rows('leftimgblurb')):?>
        <?php while (have_rows('leftimgblurb')) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $buttontext = get_sub_field('button_text');
        $type_of_link = get_sub_field('type_of_link');

        if ($type_of_link == "page")
        {
          $button_link = get_sub_field('page_link');
          $target = '_self';
        }
        elseif ($type_of_link == "url")
        {
          $button_link = get_sub_field('url_link');;
          $target = '_blank';
        }
        elseif ($type_of_link == "file")
        {
          $button_link = get_sub_field('file_link');
          $target = '_blank';
        }
        elseif ($type_of_link == "anchor")
        {
          $button_link = '#'. get_sub_field('anchor_link');
          $target = '_self';
        }
        else
        {

        }
        ?>

<div class="calloutleft">
  <section class="container-fluid callbox">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <img class="img-fluid" alt="Responsive image" src="<?= $image; ?>">
      </div>
      <div class="col-lg-6 col-md-12 flower">
        <div class="content">
          <div>
            <h2><?= $title; ?></h2>
            <div class="intro">
              <p><?= $content; ?></p>
            </div>
            <?php if( !empty($buttontext) ): ?>
            <div class="row justify-content-md-center">
                  <a target="<?= $target; ?>" href="<?= $button_link; ?>">
                    <button type="button" class="btn btn-light btn-lg"><?= $buttontext ?></button>
                  </a>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php endwhile; ?>
<?php endif; ?>

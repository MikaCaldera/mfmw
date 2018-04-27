
    <?php if (have_rows('leftimgblurb')):?>
        <?php while (have_rows('leftimgblurb')) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $lblurb_buttontext = get_sub_field('lblurb_button_text');
        $lblurb_type_of_link = get_sub_field('lblurb_type_of_link');

        if ($lblurb_type_of_link == "page")
        {
          $lblurb_button_link = get_sub_field('lblurb_page_link');
          $target = '_self';
        }
        elseif ($lblurb_type_of_link == "url")
        {
          $lblurb_button_link = get_sub_field('lblurb_url_link');;
          $target = '_blank';
        }
        elseif ($lblurb_type_of_link == "file")
        {
          $lblurb_button_link = get_sub_field('lblurb_file_link');
          $target = '_blank';
        }
        elseif ($lblurb_type_of_link == "anchor")
        {
          $lblurb_button_link = '#'. get_sub_field('lblurb_anchor_link');
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
            <?php if( !empty($lblurb_buttontext) ): ?>
            <div class="row justify-content-md-center">
                  <a target="<?= $target; ?>" href="<?= $lblurb_button_link; ?>">
                    <button type="button" class="btn btn-light btn-lg"><?= $lblurb_buttontext ?></button>
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

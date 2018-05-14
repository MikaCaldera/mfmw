<?php if (have_rows('rightimgblurb')):?>
        <?php while (have_rows('rightimgblurb')) : the_row();
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $content = get_sub_field('content');
              $rblurb_buttontext = get_sub_field('rblurb_button_text');
              $rblurb_type_of_link = get_sub_field('rblurb_type_of_link');

              if ($rblurb_type_of_link == "page")
              {
                $rblurb_button_link = get_sub_field('rblurb_page_link');
                $target = '_self';
              }
              elseif ($rblurb_type_of_link == "url")
              {
                $rblurb_button_link = get_sub_field('rblurb_url_link');;
                $target = '_blank';
              }
              elseif ($rblurb_type_of_link == "file")
              {
                $rblurb_button_link = get_sub_field('rblurb_file_link');
                $target = '_blank';
              }
              elseif ($rblurb_type_of_link == "anchor")
              {
                $rblurb_button_link = '#'. get_sub_field('rblurb_anchor_link');
                $target = '_self';
              }
              else
              {

              }
              ?>
<!-- Callout -->
<div class="calloutright">
    <section class="container-fluid callbox">
        <div class="row calout row">
            <div class="col-lg-6 col-md-12 flower d-flex justify-content-between">
              <div class="content">
                <div>
                  <h2><?= $title; ?></h2>
                  <div class="intro">
                    <p><?= $content; ?></p>
                  </div>
                </div>
                <?php if( !empty($rblurb_buttontext) ): ?>
                <div class="row justify-content-md-center">
                      <a target="<?= $target; ?>" href="<?= $rblurb_button_link; ?>">
                        <button type="button" class="btn btn-light btn-lg"><?= $rblurb_buttontext ?></button>
                      </a>
                </div>
                <?php endif; ?>
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

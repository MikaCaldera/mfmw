<?php if (have_rows('button')):?>
    <?php while (have_rows('button')) : the_row();
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

        <div class="row justify-content-md-center">
              <a target="<?= $target; ?>" href="<?= $button_link; ?>">
                <button type="button" class="btn btn-light btn-lg"><?= $buttontext ?></button>
              </a>
        </div>
<?php endwhile; ?>
<?php endif; ?>

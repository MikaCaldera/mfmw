<!-- Blurb Section -->
<div class="row justify-content-md-center">
<?php if (have_rows('custbutton')):?>
<?php while (have_rows('custbutton')) : the_row();
$btn_button_text = get_sub_field('btn_button_text');
$btn_type_of_link = get_sub_field('btn_type_of_link');
if ($btn_type_of_link == "page")
{
$btn_button_link = get_sub_field('btn_page_link');
$target = '_self';
}
elseif ($btn_type_of_link == "url")
{
$btn_button_link = get_sub_field('btn_url_link');;
$target = '_blank';
}
elseif ($btn_type_of_link == "file")
{
$btn_button_link = get_sub_field('btn_file_link');
$target = '_blank';
}
elseif ($btn_type_of_link == "anchor")
{
$btn_button_link = '#'. get_sub_field('btn_anchor');
$target = '_self';
}
else
{
}
?>
  <div class="col-lg-1">
    <div>
      <a target="<?= $target; ?>" href="<?= $btn_button_link; ?>">
        <button type="button" class="btn btn-light btn-lg"><?= $btn_button_text ?></button>
      </a>
    </div>
  </div>


<?php endwhile; ?>
<?php endif; ?>
</div>
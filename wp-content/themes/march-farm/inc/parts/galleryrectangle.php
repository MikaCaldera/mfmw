    <?php

    $type_of_link = get_sub_field('type_of_link');

    if ($type_of_link == "page")
    {
      $button_link = get_sub_field('page_link');
      $target = '_self';
    }
    elseif ($type_of_link == "url")
    {
      $button_link = get_sub_field('url_link');
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
<!-- Gallery Rectangle Section -->
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
   <?php if( !empty($buttontext) ): ?>
   <div class="row justify-content-md-center">
         <a target="<?= $target; ?>" href="<?= $button_link; ?>">
           <button type="button" class="btn btn-light btn-lg"><?= $buttontext ?></button>
         </a>
   </div>
   <?php endif; ?>
 </section>
 <!-- /Gallery -->

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
   <?php

   $gal_rect_text_on_btn = get_sub_field('gal_rect_text_on_btn');
   $gal_rect_type_of_link = get_sub_field('gal_rect_type_of_link');

   if ($gal_rect_type_of_link == "page")
   {
     $gal_rect_button_link = get_sub_field('gal_rect_page_link');
     $target = '_self';
   }
   elseif ($gal_rect_type_of_link == "url")
   {
     $gal_rect_button_link = get_sub_field('gal_rect_url_link');
     $target = '_blank';
   }
   elseif ($gal_rect_type_of_link == "file")
   {
     $gal_rect_button_link = get_sub_field('gal_rect_file_link');
     $target = '_blank';
   }
   elseif ($gal_rect_type_of_link == "anchor")
   {
     $gal_rect_button_link = '#'. get_sub_field('gal_rect_anchor_link');
     $target = '_self';
   }
   else
   {

   }
   ?>
   <?php if( !empty($gal_rect_text_on_btn) ): ?>
   <div class="row justify-content-md-center">
         <a target="<?= $target; ?>" href="<?= $gal_rect_button_link; ?>">
           <button type="button" class="btn btn-light btn-lg"><?= $gal_rect_text_on_btn ?></button>
         </a>
   </div>
   <?php endif; ?>
 </section>
 <!-- /Gallery -->

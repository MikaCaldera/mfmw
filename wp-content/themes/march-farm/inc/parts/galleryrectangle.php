
<!-- Gallery Rectangle Section -->
 <section class="gallery" >
   <div class="row">
     <div class="container-fluid">
       <h1 class="my-4 text-center text-lg-center"><?php the_sub_field('section_title'); ?></h1>
       <div class="row text-center text-lg-center">
       <?php if (have_rows('images')):?>
         <?php while (have_rows('images')) : the_row();
             $image = get_sub_field('image'); ?>

         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="<?= $image; ?>" class="d-block mb-4 h-100" data-featherlight="image">
             <img class="img-fluid" src="<?= $image; ?>" alt="">
           </a>
         </div>

   <?php endwhile; ?>
   <?php endif; ?>
       </div>
     </div>
   </div>
 </section>
 <!-- /Gallery -->

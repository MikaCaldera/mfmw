<?php if (have_rows('partner')):?>
  <?php   $i = 0; ?>
  <!-- Our partners -->
  <div style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/bg-leaves.png') no-repeat left center; background-color: #F1F2F3;">
    <section class="container text-center" >
      <h1>Affiliates</h1>
      <div class="row justify-content-md-center">
         <?php while (have_rows('partner')) : the_row();
             $link = get_sub_field('link');
             $logo = get_sub_field('logo');
             $i++;
             ?>
        <div class="col-lg-2 col-sm-4 mb-4">
          <a href="<?= $link ?>"><img class="img-fluid" src="<?= $logo ?>" alt=""></a>
        </div>
        <?php if($i % 5 == 0): ?>
            <div class="w-100"></div>
        <?php endif;?>
<?php endwhile; ?>
    </div>
  </section>
</div>
<?php endif; ?>
<!-- /.row -->


<!-- Call to Action Section -->
<div class="cta">
  <section class="container">
    <div class="row ctahold">
      <div class="col-lg-6">
        <h1 class="display-4"><?php the_sub_field('title'); ?></h1>
      </div>
      <div class="col-lg-6">
        <p><?php the_sub_field('description'); ?></p>
      </div>
      <div class="w-100"></div>
      <div class="col-lg-12 action">
      <?php if (have_rows('action_links')):?> 
        <nav class="nav justify-content-center">
        <?php while (have_rows('action_links')) : the_row(); 
              $link_text = get_sub_field('link_text');
              $link_url = get_sub_field('link_url');
        ?>        
          <a class="nav-link" href="<?= $link_url; ?>"><?= $link_text; ?></a>
        <?php endwhile; ?>
        </nav>    
        <?php endif; ?>          
      </div>
    </div>
  </section>
</div>
<!-- /cta -->
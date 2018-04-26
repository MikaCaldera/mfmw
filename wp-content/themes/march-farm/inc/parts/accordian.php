<?php if (have_rows('accordian_tab')):?>
  <?php   $i = 0; ?>
  <?php $random = rand(1,222); ?>
  <!-- Accordian Section -->
  <div class="accordion">
    <section class="container" >
      <div class="row">
        <div class="col-lg-12">
         <?php while (have_rows('accordian_tab')) : the_row();
             $headline = get_sub_field('headline');
             $content = get_sub_field('content');
             $i++;
             $random++;
             ?>
                  <div id="accordion">
                    <div class="">
                      <div class="card-title" id="heading<?= $i ?>-<?= $random ?>">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $i ?>-<?= $random ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>-<?= $random ?>">
                            <?= $headline ?>
                          </button>
                        </h5>
                      </div>
                      <div id="collapse<?= $i ?>-<?= $random ?>" class="collapse <?php if($i == 1){ echo 'show'; }?>" aria-labelledby="heading<?= $i ?>-<?= $random ?>" data-parent="#accordion">
                        <div class="card-body">
                          <?= $content ?>
                      </div>
                    </div>
                  </div>
<?php endwhile; ?>
        </div>
      </div>
    </section>
  </div>
<?php endif; ?>

<?php
// check if the flexible content field has rows of data
if (have_rows('modules')):

    // loop through the rows of data
    while (have_rows('modules')) : the_row();

        if ( get_row_layout() == 'blurbs'):
            get_template_part('inc/parts/blurb');

        elseif (get_row_layout() == 'highlights'):
            get_template_part('inc/parts/highlights');

        elseif (get_row_layout() == 'square_gallery'):
            get_template_part('inc/parts/gallerysquare');

        elseif (get_row_layout() == 'rect_gallery'):
            get_template_part('inc/parts/galleryrectangle');

        elseif (get_row_layout() == 'cta'):
            get_template_part('inc/parts/cta');

        elseif (get_row_layout() == 'events'):
            get_template_part('inc/parts/events');

        elseif (get_row_layout() == 'leftimgblurbs'):
            get_template_part('inc/parts/calloutimgleft');

        elseif (get_row_layout() == 'rightimgblurbs'):
              get_template_part('inc/parts/calloutimgright');

        elseif (get_row_layout() == 'video'):
            get_template_part('inc/parts/videotext');

        elseif (get_row_layout() == 'accordian'):
            get_template_part('inc/parts/accordian');

        elseif (get_row_layout() == 'partners'):
            get_template_part('inc/parts/partners');

        elseif (get_row_layout() == 'map'):
            get_template_part('inc/parts/map');

         elseif (get_row_layout() == 'introductions'):
            get_template_part('inc/parts/intro');


        endif;

    endwhile;

else :
    // no layouts found
 ?>
    <?php
endif;
?>

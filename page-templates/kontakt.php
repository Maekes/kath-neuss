<?php
/* 
Template Name: Kontakt
*/

get_header(); ?>


<div class="max-w-screen-xl lg:flex">

    <div class="w-full lg:w-2/3 p-0 mb-8 lg:mb-0">

        <h1 class="mb-8 font-thin "><?php the_title();  ?></h1>

        <section class="space-y-4 mb-8">
            <?php the_content(); ?>
        </section>

    </div>

    <div class="w-full lg:w-1/3 p-0 lg:pl-8 space-y-8 mb-8">

        <?php
        // Check rows exists.
        if (have_rows('bueros')) :

            // Loop through rows.
            while (have_rows('bueros')) : the_row();

                get_template_part("template-parts/section", "buero");

            // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;
        ?>

    </div>

</div>

<?php

get_footer();

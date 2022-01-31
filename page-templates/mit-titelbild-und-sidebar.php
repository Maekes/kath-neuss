<?php
/* 
Template Name: Mit Titelbild und Sidebar
Template Post Type: gruppen
*/

get_header(); ?>


<div class="max-w-screen-xl lg:flex">

    <div class="w-full lg:w-2/3 p-0 mb-8 lg:mb-0">

        <?php get_template_part('template-parts/content', 'single'); ?>

    </div>

    <div class="w-full lg:w-1/3 p-0 lg:pl-8 space-y-8 mb-8">

        <?php
        // Check rows exists.
        if (have_rows('sidebar')) :

            // Loop through rows.
            while (have_rows('sidebar')) : the_row();

                get_template_part("template-parts/section", "sidebar-block");

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

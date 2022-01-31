<?php
/* 
Template Name: Startseite
*/

get_header(); ?>

<div class="space-y-4">


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">

        <section class="md:col-span-2 space-y-4">

            <?php get_template_part('template-parts/section', "slideshow") ?>

            <div class=" md:hidden">
                <?php get_template_part('template-parts/section', "schnellzugriff") ?>
            </div>

            <div class="space-y-4 mb-8">

                <h2 class="my-4">Aktuelles</h2>

                <?php
                global $wp;
                $s_array = array('posts_per_page' => get_field("sichtbare_beitraege"));  // Change to how many posts you want to display 
                $new_query = array_merge($s_array, (array) $wp->query_vars);

                // The Query
                $the_query = new WP_Query($new_query);
                if ($the_query->have_posts()) : ?>

                    <?php

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>

                        <?php get_template_part('template-parts/section', 'archive'); ?>

                    <?php endwhile; ?>

                <?php endif;
                wp_reset_query(); ?>
            </div>
        </section>
        <section class="md:col-span-1 space-y-4">
            <div class="hidden md:block">
                <?php get_template_part('template-parts/section', "schnellzugriff") ?>
            </div>

            <?php
            if (have_rows('sidebar')) :

                while (have_rows('sidebar')) :
                    the_row();
                    get_template_part("template-parts/section", "sidebar-block");
                endwhile;
            endif;
            ?>

            <?php get_template_part('template-parts/section', "gottesdienste-heute") ?>
        </section>

    </div>
</div>

<?php
get_footer();

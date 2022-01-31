<?php get_header(); ?>

<div class="mx-auto mb-8">

    <h1><?php post_type_archive_title() ?></h1>


    <?php

    $taxonomy = array( "name" => 'gruppenkategorie' , "slug" => 'gruppenkategorie');
    $custom_post_type = "gurppen";

        if ( have_posts() )
            the_post();

            // Query your specified taxonomy to get, in order, each category
            $categories = get_terms($taxonomy['name'], 'orderby=title');
            foreach( $categories as $category ) {
                 
                global $post; // Access the global $post object.

                // Setup query to return each custom post within this taxonomy category
                $o_queried_posts = get_posts(array(
                    'nopaging' => true,
                    'post_type' => $custom_post_type,
                    'taxonomy' => $category->taxonomy,
                    'term' => $category->slug,
                ));
        ?>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <?php
                // Loop through each custom post type
                foreach($o_queried_posts as $post) : 
                    setup_postdata($post); // setup post data to use the Post template tags. 

                    get_template_part('template-parts/section', 'archive-default'); 
                endforeach; 
                wp_reset_postdata(); ?>
                </div> 

            <?php endforeach; ?>

        <?php endif; ?>

</div>

<?php
get_footer();

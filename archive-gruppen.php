<?php get_header(); ?>

<div class="mx-auto mb-8">

    <h1><?php post_type_archive_title() ?></h1>


    <?php 
        // Source: https://code.tutsplus.com/tutorials/taxonomy-archives-list-posts-by-taxonomys-terms--cms-20045
        //start by fetching the terms for gruppen taxonomy
        $terms = get_terms( 'gruppenkategorie', array(
            'orderby'    => 'count',
            'hide_empty' => 0,
            'partent' => 0
        ) );

        foreach( $terms as $term ) {
            echo'<h2>' . $term->name . '</h2>';
            // Define the query
            $args = array(
                'post_type' => 'gruppen',
                'gruppenkategorie' => $term->slug
            );
            $query = new WP_Query( $args );
   
            
            // Start the Loop
            while ( $query->have_posts() ) : $query->the_post(); 

                get_template_part('template-parts/section', 'archive-default'); 
            
            endwhile;
            
            // use reset postdata to restore orginal query
            wp_reset_postdata();
        } 
        ?>


</div>

<?php
get_footer();

<?php
/* 
Template Name: Pastoralteam
*/

get_header(); ?>


<h1 class="text-center mb-8">Priester</h1>

<div class="mb-8 max-w-screen-lg mx-auto text-center bg-white shadow-xl rounded-2xl p-4 lg:px-8 text-sm lg:text-base">
    <?php the_content() ?>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-16">

    <?php $post_objects = get_field('priester');
    if ($post_objects) : ?>
        <?php foreach ($post_objects as $post) : // variable must be called $post (IMPORTANT) 
        ?>
            <?php setup_postdata($post); ?>

            <?php get_template_part('template-parts/section', "person") ?>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
        ?>
    <?php endif; ?>

</div>


<h1 class="text-center  mb-16">Diakone</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-16">

    <?php $post_objects = get_field('diakone');
    if ($post_objects) : ?>
        <?php foreach ($post_objects as $post) : // variable must be called $post (IMPORTANT) 
        ?>
            <?php setup_postdata($post); ?>

            <?php get_template_part('template-parts/section', "person") ?>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
        ?>
    <?php endif; ?>

</div>


<h1 class="text-center  mb-16">Referenten</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-8">

    <?php $post_objects = get_field('referenten');
    if ($post_objects) : ?>
        <?php foreach ($post_objects as $post) : // variable must be called $post (IMPORTANT) 
        ?>
            <?php setup_postdata($post); ?>

            <?php get_template_part('template-parts/section', "person") ?>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
        ?>
    <?php endif; ?>

</div>

<?php
get_footer();

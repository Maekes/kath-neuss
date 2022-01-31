<?php
/* 
Template Name: Gottesdienste
*/

get_header(); ?>

<div class="mx-auto lg:w-2/3 w-full">

    <h1 class="mb-8 font-thin text-center"><?php the_title();  ?></h1>

    <div class="text-center mb-8">
        <?php the_content(); ?>
    </div>

    <?php get_template_part('template-parts/content', 'alle-gottesdienste'); ?>

</div>

<?php
get_footer();

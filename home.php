<?php
/* 
Template Name: Aktuelles
*/

get_header(); ?>

<div class="mx-auto lg:w-3/5 w-full">

    <h1 class="text-center"><?php single_post_title();  ?></h1>

    <div class="space-y-8 mb-8">

        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) :
                the_post();
            ?>

                <?php get_template_part('template-parts/section', "archive"); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

    <div class="text-center">

        <?php echo paginate_links() ?>
    </div>

</div>

<?php
get_footer();

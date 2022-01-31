<?php get_header(); ?>

<div class="mx-auto mb-8">

    <h1><?php post_type_archive_title() ?></h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) :
                the_post();
            ?>

                <?php get_template_part('template-parts/section', 'gemeinden'); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

</div>

<?php
get_footer();

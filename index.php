<?php get_header(); ?>

<div class="mx-auto lg:w-3/4 w-full">

  <h1 class="mb-8 font-thin text-center"><?php the_title();  ?></h1>

  <section class="space-y-4 mb-8">
    <?php the_content(); ?>
  </section>

</div>

<?php

get_footer();

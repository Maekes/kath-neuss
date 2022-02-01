<?php get_header(); ?>

<div class="mx-auto mb-8">

    <h1>Unser Pfarrbrief</h1>

    <div class="flex flex-col lg:flex-row w-full rounded-2xl overflow-hidden bg-white shadow-lg">
        <img class="h-56 lg:h-auto w-full lg:w-1/3 object-cover" src="<?php the_post_thumbnail_url(); ?>" alt="Pfarrbrief Cover">
        <div class="flex-1 px-4 pt-4 pb-8 lg:p-8 lg:pt-6 hypens">
            <span class="text-gray-600 text-sm">Aktuelle Ausgabe</span>
            <h2 class="mb-4"><?php the_title(); ?></h2>
            
            <p class="mb-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <p class="mb-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <a class="px-3 sm:px-6 py-3 bg-green-600 rounded-lg text-white font-bold" href="#">Aktuellen Pfarrbrief lesen</a>
        </div>
    </div>


    <hr class="my-8">

    <h2 class="mb-8 text-center font-light">Alle Ausgaben</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8 justify-items-center">

        <?php
        global $wp;
        $s_array = array('posts_per_page' => -1);  // Change to how many posts you want to display 
        $new_query = array_merge($s_array, (array) $wp->query_vars);

        // The Query
        $the_query = new WP_Query($new_query);


        if ($the_query->have_posts()) :

            while ($the_query->have_posts()) :
                $the_query->the_post();
        ?>

                <?php get_template_part('template-parts/section', 'pfarrbrief'); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

</div>

<?php
get_footer();

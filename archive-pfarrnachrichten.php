<?php get_header(); ?>

<div class="mx-auto mb-8">

    <h1>Unsere Pfarrnachrichten</h1>

    <div class="flex flex-col lg:flex-row w-full rounded-2xl overflow-hidden bg-white shadow-lg">
        <a class="h-80 lg:h-auto w-full lg:w-1/3 object-cover" href="/wp-content/uploads/2021/10/Pfarrnachrichten-18-2021.pdf">
            <object class="h-full w-full" type="application/pdf" data="/wp-content/uploads/2021/10/Pfarrnachrichten-18-2021.pdf">
                <a href="/wp-content/uploads/2021/10/Pfarrnachrichten-18-2021.pdf">Download PDF</a>.</p>
            </object>
        </a>
        <div class="flex-1 px-4 pt-4 pb-8 lg:p-8 lg:pt-6">
            <span class="text-gray-600 text-sm">Aktuelle Ausgabe</span>
            <h2 class="mb-4"><?php the_title(); ?></h2>
            <article class="pfarrnachrichten mb-8">

                <?php the_content() ?>

            </article>
            <a class="px-3 sm:px-6 py-3 bg-green-600 rounded-lg text-white font-bold" href="#">Aktuellen Pfarrnachrichten lesen</a>
        </div>
    </div>


    <hr class="my-8">

    <h2 class="mb-8 text-center font-light">Archiv</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">

        <?php
        global $wp;
        $s_array = array('posts_per_page' => 12);  // Change to how many posts you want to display 
        $new_query = array_merge($s_array, (array) $wp->query_vars);

        // The Query
        $the_query = new WP_Query($new_query);


        if ($the_query->have_posts()) :

            while ($the_query->have_posts()) :
                $the_query->the_post();
        ?>

                <?php get_template_part('template-parts/section', 'pfarrnachrichten'); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

</div>

<?php
get_footer();

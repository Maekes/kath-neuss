<a id="post-<?php the_ID(); ?>" class="w-full bg-white rounded-lg shadow overflow-hidden  flex items-top flex-row " href="<?php the_permalink(); ?>">
    <div class="flex-shrink-0 h-auto self-stretch w-24 sm:w-40 md:w-56 bg-cover bg-center border-r border-gray-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    </div>
    <div class="px-5 py-2">
        <span class="block text-xl leading-tight font-semibold text-black "><?php the_title(); ?></span>
        <p class="text-xs text-gray-500 mb-2"><?php echo get_the_date(); ?></p>
        <?php the_excerpt(); ?>
    </div>
</a>
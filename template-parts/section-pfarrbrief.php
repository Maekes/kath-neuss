<a id="post-<?php the_ID(); ?>" class="bg-white rounded-lg shadow overflow-hidden simple-scaling relative " href="<?php the_permalink(); ?>">

    <img class="h-36 sm:h-64 w-auto relative" src="<?php the_post_thumbnail_url(); ?>" alt="">

    <div class="bg-gradient-to-t w-full from-black via-transparent to-transparent  h-full absolute top-0 opacity-70"></div>
    <span class="block leading-none font-bold text-sm sm:text-lg lg:text-xl text-white absolute bottom-2 left-2"><?php the_title(); ?></span>

</a>
<a id="post-<?php the_ID(); ?>" class="w-full bg-white rounded-lg shadow overflow-hidden simple-scaling relative" href="<?php the_permalink(); ?>">
    <div class="relative">
        <div class="h-48 xl:h-56 self-stretch w-full bg-cover bg-center" style="background-image:url(<?php the_post_thumbnail_url("medium"); ?>)">
        </div>
        <div class="bg-gradient-to-t from-black via-transparent to-transparent w-full h-full absolute top-0 opacity-70"></div>
        <span class="block leading-none font-bold text-2xl text-white absolute bottom-2 left-2"><?php the_title(); ?></span>
    </div>
</a>
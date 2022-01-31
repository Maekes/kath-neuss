<a id="post-<?php the_ID(); ?>" class="w-full bg-white rounded-lg shadow overflow-hidden simple-scaling relative" href="<?php the_permalink(); ?>">
    <div class="relative h-48 xl:h-56">
        <img class="w-full h-full object-cover" src="<?php echo count(get_field('titelbilder')) > 4 ? get_field('titelbilder')[4]['url'] : get_field('titelbilder')[0]['url'] ?>" />
        <div class="bg-gradient-to-t from-black via-transparent to-transparent w-full h-full absolute top-0 opacity-40"></div>
        <h2 class="block leading-none font-bold text-2xl text-white absolute bottom-2 left-2"><?php the_title(); ?></h2>
    </div>
</a>
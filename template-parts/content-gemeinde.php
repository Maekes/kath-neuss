<article id="post-<?php the_ID(); ?>" class="shadow-xl rounded-2xl overflow-hidden bg-white">

    <?php
    $images = get_field('titelbilder');
    ?>


    <div class="grid grid-cols-3 grid-rows-2 gap-1 overflow-hidden h-40 sm:h-80">
        <img src="<?php echo $images[0]['url'] ?>" class="w-full h-full object-cover row-span-2" />
        <img src="<?php echo $images[1]['url'] ?>" class="w-full h-full object-cover col-span-2" />
        <img src="<?php echo $images[2]['url'] ?>" class="w-full h-full object-cover" />
        <img src="<?php echo $images[3]['url'] ?>" class="w-full h-full object-cover" />
    </div>

    <div class="p-4 lg:px-8 lg:py-4 border-b border-gray-200 lg:block flex flex-col justify-between items-center">
        <h1 class="mb-2 text-4xl md:text-5xl font-bold leading-none"> <?php the_title() ?></h1>

        <div class="flex-1 grid grid-cols-2 gap-2">
            <a class="lg:hidden rounded p-2  flex flex-row items-center justify-around  border border-gray-100" href="#anschrift">
                <img class="h-8 w-auto mr-2" src="/wp-content/uploads/2021/10/map_2.png" alt="">
                <span class="text-center font-semibold text-sm text-gray-800 ">Anschrift</span>
            </a>
            <a class="lg:hidden rounded p-2 flex flex-row items-center justify-around border border-gray-100" href="#gottesdienste">
                <img class="h-8 w-auto mr-2" src="/wp-content/uploads/2021/10/church.png" alt="">
                <span class=" text-center font-semibold text-sm text-gray-800 leading-none hypens">Gottes&shy;dienste</span>
            </a>
        </div>

    </div>

    <div class="article-content px-4 lg:px-8 py-4 ">
        <?php the_content(); ?>
    </div>

</article>
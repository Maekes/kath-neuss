<div class="sm:block flex items-top space-x-2 sm:space-x-0 text-center bg-white shadow-lg rounded-lg sm:px-2 p-4">
    <div class="rounded-lg sm:rounded-full overflow-hidden flex-none h-48 w-32 sm:h-48 sm:w-48 sm:mx-auto sm:mb-4 shadow-md">
        <img class="object-cover h-full w-full" src="<?php the_post_thumbnail_url("small"); ?>">
    </div>
    <div class="mx-auto w-full">
        <h3 class="font-medium leading-tight pb-1"><?php the_title(); ?></h3>

        <?php if (get_field('berufsbezeichnung')) : ?>
            <p class="font-light mb-4">
                <?php the_field('berufsbezeichnung'); ?>
            </p>
        <?php endif; ?>
        <?php if (get_field('anschrift')) : ?>
            <p class="font-normal mb-2">
                <?php the_field('anschrift'); ?>
            </p>
        <?php endif; ?>
        <?php if (get_field('telefonnummer')) : ?>
            <p class="font-normal mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-6 h-6 stroke-1 text-black -ml-7 mb-1 mr-1 inline-block" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <?php the_field('telefonnummer'); ?>
            </p>
        <?php endif; ?>
        <div class="flex justify-center space-x-2">
            <?php if (get_field('mailadresse')) : ?>
                <a class="hover:text-red-700 text-black" href="mailto:<?php the_field('mailadresse'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-8 h-8 stroke-1" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if (get_field('instagram')) : ?>
                <a class="hover:text-red-700 text-black" href="<?php the_field('instagram'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-8 h-8 stroke-1" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                        <circle cx="12" cy="12" r="3" />
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
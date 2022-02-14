<div class="flex items-top space-x-4 md:max-w-md">

    <img class="object-cover rounded-lg overflow-hidden flex-none h-40 w-28 shadow-md" src="<?php the_post_thumbnail_url("small"); ?>">

    <div class="mx-auto text-sm text-left">
        <div class="mb-2">
            <h4 class="font-medium text-xl leading-tight"><?php the_title(); ?></h4>

            <?php if (get_field('berufsbezeichnung', get_the_ID())) : ?>
                <p class="font-light mb-2 berufsbezeichnung leading-tight">
                    <?php the_field('berufsbezeichnung', get_the_ID()); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="space-y-2">

            <?php if (get_field('anschrift', get_the_ID())) : ?>
                <p class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4 h-4 stroke-1 text-black  mr-1 " viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="18" y2="6.01" />
                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                        <line x1="9" y1="4" x2="9" y2="17" />
                        <line x1="15" y1="15" x2="15" y2="20" />
                    </svg>
                    <?php the_field('anschrift', get_the_ID()); ?>
                </p>
            <?php endif; ?>
            <?php if (get_field('telefonnummer', get_the_ID())) : ?>
                <p class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4 h-4 stroke-1 text-black  mr-1 " viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    </svg>
                    <?php the_field('telefonnummer', get_the_ID()); ?>
                </p>
            <?php endif; ?>
            <?php if (get_field('mailadresse', get_the_ID())) : ?>
                <p class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4 h-4 stroke-1 text-black  mr-1 mt-0.5" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                    </svg>
                    <?php the_field('mailadresse', get_the_ID()); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative">


    <?php if (get_sub_field('bild')) : ?>
        <img src="<?php the_sub_field('bild'); ?>" alt="" class="w-full h-36 object-cover">
    <?php endif; ?>

    <h4 class="px-4 py-2 font-semibold leading-tight text-lg"><?php the_sub_field('name'); ?></h4>

    <hr>

    <div class="p-4 space-y-2">
        <?php if (get_sub_field('anschrift')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="18" y1="6" x2="18" y2="6.01" />
                    <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                    <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                    <line x1="9" y1="4" x2="9" y2="17" />
                    <line x1="15" y1="15" x2="15" y2="20" />
                </svg>
                <p> <?php the_sub_field('anschrift'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_sub_field('telefonnummer')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <p><?php the_sub_field('telefonnummer'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_sub_field('fax')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                    <rect x="7" y="13" width="10" height="8" rx="2" />
                </svg>
                <p> <?php the_sub_field('fax'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_sub_field('e-mail')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <p> <?php the_sub_field('e-mail'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_sub_field('oeffnungszeiten')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <polyline points="12 7 12 12 15 15" />
                </svg>
                <div>
                    <p class="space-y-2"> <?php the_sub_field('oeffnungszeiten'); ?> </p>
                </div>

            </div>
        <?php endif; ?>
    </div>

</div>
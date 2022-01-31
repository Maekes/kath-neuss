<div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative">
    <div class="absolute -top-20 invisible" id="anschrift"></div>
    <?php if (get_field('anschrift')) : ?>
        <div class="relative w-full h-20 bg-cover bg-center shadow-inner " style="background-image: url('http://neussmitte.local/wp-content/uploads/2021/10/map.png');">
            <a target="_blank" rel="noopener noreferrer" href="<?php the_field('google_maps_link'); ?>" class="bg-white bg-opacity-60 h-full flex flex-col group justify-between py-2 items-center shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-16 w-16 group-hover:scale-105 transition ease-out duration-200" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p class="text-sm font-bold  uppercase group-hover:scale-105 transition ease-out duration-200">in Google Maps öffnen</p>
            </a>
        </div>
    <?php endif; ?>

    <div class="px-4 py-2 space-y-2">

        <?php if (get_field('anschrift')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="18" y1="6" x2="18" y2="6.01" />
                    <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                    <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                    <line x1="9" y1="4" x2="9" y2="17" />
                    <line x1="15" y1="15" x2="15" y2="20" />
                </svg>
                <p class="flex-1"><b>Anschrift:</b><br /> <?php the_field('anschrift'); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_field('oeffnungszeiten')) : ?>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <polyline points="12 7 12 12 15 15" />
                </svg>
                <p class="flex-1"><b>Öffnungszeiten:</b><br /><?php the_field('oeffnungszeiten'); ?></p>
            </div>
        <?php endif; ?>
        <div class="text-sm"><?php the_field('adressfeld_zusatz'); ?></div>

    </div>
</div>
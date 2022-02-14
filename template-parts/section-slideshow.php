<!-- Slideshow container -->

<div id="stage" class="relative h-96 shadow-lg  rounded-lg overflow-hidden">
    <style>
        #stage div:nth-of-type(1) {
            animation-name: fader;
            animation-delay: 6s;
            animation-duration: 0.5s;
            z-index: 20;
        }

        #stage div:nth-of-type(1):hover {
            animation-play-state: paused;
        }

        #stage div:nth-of-type(2) {
            z-index: 10;
        }

        #stage div:nth-of-type(n+3) {
            display: none;
        }

        @keyframes fader {
            from {
                opacity: 1.0;
            }

            to {
                opacity: 0.0;
            }
        }
    </style>
    <?php
    // Check rows exists.
    if (have_rows('slider')) :

        // Loop through rows.
        while (have_rows('slider')) : the_row();
            $link = get_sub_field("link");
    ?>

            <div class="absolute w-full h-full">

                <img src="<?php echo wp_get_attachment_image(the_sub_field("bild"), "medium"); ?>" class="h-full w-full object-cover" alt="">

                <section class="absolute bottom-0 flex flex-col w-full">
                    <section class="absolute top-0 opacity-80 bg-gradient-to-t from-black via-black w-full h-full "></section>
                    <section class="px-5 md:px-10 pt-10 pb-4 z-10">

                        <span class="text-white text-3xl z-10 font-semibold"><?php the_sub_field("titel") ?>
                            <?php if ($link) : ?>
                                <a class="text-2xl z-10 font-normal leading-none pl-5 hidden md:inline" style="color:<?php the_sub_field("linkfarbe") ?>">» <?php echo $link["title"] ?></a>
                            <?php endif; ?>

                        </span>

                        <p class="text-white text-xl z-10 font-light "><?php the_sub_field("beschreibung") ?></p>
                    </section>
                </section>
                <?php if ($link) : ?>
                    <a href="<?php echo $link["url"] ?>" class="absolute top-0 left-0 right-0 bottom-0 z-20">
                    </a>
                <?php endif; ?>
            </div>
    <?php
        // End loop.
        endwhile;

    // Do something...
    endif;
    ?>



</div>

<script>
    window.addEventListener("DOMContentLoaded", function(e) {

        // Original JavaScript code by Chirp Internet: chirpinternet.eu
        // Please acknowledge use of this code by including this header.

        var stage = document.getElementById("stage");
        var fadeComplete = function(e) {
            console.log(e);
            stage.appendChild(arr[0]);
        };
        var arr = stage.getElementsByTagName("div");

        for (var i = 0; i < arr.length; i++) {
            arr[i].addEventListener("animationend", fadeComplete, false);
        }

    }, false);
</script>
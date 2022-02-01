 <?php if (get_sub_field('rahmenfarbe')) : ?>
     <div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative border-2" style="border-color: <?php the_sub_field('rahmenfarbe'); ?>">
     <?php else : ?>
         <div class="block shadow-xl rounded-2xl overflow-hidden bg-white relative">
         <?php endif; ?>

         <?php if (get_sub_field('bild')) : ?>
             <?php if (get_sub_field('bild_nicht_strecken')) : ?>
                 <a href="<?php the_sub_field('bildlink'); ?>"> <img src="<?php the_sub_field('bild'); ?>" alt="" class="w-full h-36 object-contain"></a>
             <?php else : ?>
                 <img src="<?php the_sub_field('bild'); ?>" alt="" class="w-full h-36 object-cover">
             <?php endif; ?>
         <?php endif; ?>
         <?php if (get_sub_field('titel') || get_sub_field('inhalt') || get_sub_field('personen') || get_sub_field('button')) : ?>
             <div class="px-4 py-2 space-y-2">
                 <?php if (get_sub_field('titel')) : ?>
                     <h3><?php the_sub_field('titel') ?></h3>
                 <?php endif; ?>

                 <?php the_sub_field('inhalt') ?>


                 <?php
                    $personen = get_sub_field('personen');

                    if ($personen) :  ?>
                     <div class="space-y-6 ">
                         <?php
                            foreach ($personen as $post) {
                                setup_postdata($post);
                                get_template_part("template-parts/section", "person-in-sidebar");
                                wp_reset_postdata();
                            }
                            ?>
                     </div>
                 <?php endif; ?>

                 <?php if (get_sub_field('button')) :
                        $link_target = get_sub_field("button")['target'] ? get_sub_field("button")['target'] : '_self';
                    ?>
                     <a class=" px-4 py-3 leading-none rounded-lg has-primary-background-color hover:opacity-90 font-semibold  text-white inline-block" href="<?php echo get_sub_field("button")['url']  ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo get_sub_field("button")['title']  ?></a>
                 <?php endif; ?>
             </div>
         <?php endif; ?>
         </div>
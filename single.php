<?php get_header(); ?>

<div class="max-w-screen-xl lg:flex">

	<div class="w-full lg:w-9/12 p-0 mb-8">


		<?php if (have_posts()) : ?>

			<?php
			while (have_posts()) :
				the_post();
			?>

				<?php get_template_part('template-parts/content', 'single'); ?>


			<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<div class="w-full lg:w-3/12 p-0 lg:pl-8 space-y-8">
		<h3 class="text-2xl font-semibold">Weitere Beiträge</h3>

		<?php
		// the query
		$the_query = new WP_Query(array(
			'post_type' =>  'post',
			'posts_per_page' => 3,
			'post_status'    => array('publish'),
		));
		?>

		<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<a class="block w-full bg-white rounded-lg shadow overflow-hidden simple-scaling xl:opacity-70 hover:opacity-100" href="<?php the_permalink(); ?>">
					<div class="flex items-center flex-col md:flex-row lg:flex-col">
						<div class="h-32 md:h-auto lg:h-32 flex-shrink-0 self-stretch w-full md:w-40 lg:w-full bg-cover bg-center border-b md:border-b-0 lg:border-b md:border-gray-100" style="background-image:url(<?php the_post_thumbnail_url("medium"); ?>)"></div>
						<div class="px-4 py-3">
							<span class="block text-lg leading-tight font-bold text-black mb-2"><?php the_title(); ?></span>
							<p class="text-gray-600  leading-snug"><?php echo get_the_excerpt(); ?></p>
						</div>
					</div>
				</a>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php __('Keine Beiträge vorhanden'); ?></p>
		<?php endif; ?>

	</div>
</div>
<?php
get_footer();

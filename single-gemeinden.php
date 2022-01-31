<?php get_header(); ?>

<div class="max-w-screen-xl lg:flex">


	<?php if (have_posts()) : ?>

		<?php
		while (have_posts()) :
			the_post();
		?>
			<div class="w-full lg:w-2/3 p-0 mb-8 lg:mb-0">

				<?php get_template_part('template-parts/content', 'gemeinde'); ?>

			</div>

			<div class="w-full lg:w-1/3 p-0 lg:pl-8 space-y-8 mb-8">

				<?php get_template_part("template-parts/section", "adresse") ?>
				<?php get_template_part("template-parts/section", "gottesdienste") ?>

			</div>
		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();

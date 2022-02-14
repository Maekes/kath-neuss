<article id="post-<?php the_ID(); ?>" class="shadow-xl rounded-2xl overflow-hidden bg-white">

	<?php if (has_post_thumbnail($post->ID)) : ?>
		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
		<div class="overflow-hidden relative">
			<?php if ($image[1] > $image[2] + 10) : ?>
				<img src="<?php echo $image[0]; ?>" class="h-52 lg:h-72 w-full object-cover">
			<?php else : ?>
				<img src="<?php echo $image[0]; ?>" class="h-56 lg:h-96 w-full object-cover blur-xl scale-110">
				<img src='<?php echo $image[0]; ?>' class='absolute left-0 right-0 top-0 h-56 sm:h-96 w-5/12 mx-auto object-cover shadow-xl z-10' />
			<?php endif; ?>
		</div>

	<?php endif; ?>

	<header class="p-4 lg:px-8 lg:py-4 border-b border-gray-200">

		<h1 class="mb-1 text-3xl lg:text-4xl font-bold leading-none"> <?php the_title() ?></h1>
		<?php if ($post->post_type == "post") : ?>
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-gray-400 text-sm">Veröffentlicht am <?php echo get_the_date(); ?></time>
		<?php endif; ?>
	</header>

	<div class="article-content px-4 lg:px-8 py-4 hypens">
		<?php the_content(); ?>
	</div>

</article>
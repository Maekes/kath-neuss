<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4.1.0/ie11CustomProperties.min.js"></script>

	<?php wp_head(); ?>
</head>

<body class="bg-sand text-gray-900 antialiased relative xl:px-8">

	<div class=" fixed flex left-0 right-0 top-2 pb-8 lg:top-4 max-h-screen z-50">
		<header class="max-w-screen-xl w-full mx-auto top-2 lg:top-4 z-50 px-2 flex max-h-screen ">
			<nav class="bg-white relative lg:backdrop-blur-lg lg:bg-opacity-80 rounded-xl shadow-md overflow-hidden lg:overflow-visible w-full flex flex-col lg:flex-row lg:justify-between lg:items-center px-0 lg:px-2">

				<div class="py-2 flex items-center pl-2 lg:pl-0">
					<?php if (has_custom_logo()) { ?>
						<?php the_custom_logo(); ?>

					<?php } ?>
					<a href="/" class="inline-block align-middle">

						<p class="font-extrabold text-lg uppercase leading-snug">
							<?php echo get_bloginfo('name'); ?>
						</p>

						<p class="text-sm font-light text-gray-600 ">
							<?php echo get_bloginfo('description'); ?>
						</p>
					</a>
				</div>


				<svg id="mobileMenuToggle" viewBox="0 0 20 20" class=" lg:hidden cursor-pointer inline-block w-6 h-6 absolute top-5 right-5 " version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
						<g id="icon-shape">
							<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
						</g>
					</g>
				</svg>


				<script>
					document.getElementById("mobileMenuToggle").onclick = () => {
						document.getElementById("primary-menu").classList.toggle("hidden")
					}
				</script>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden lg:flex lg:self-stretch lg:items-center overflow-y-auto lg:overflow-y-visible flex-1 lg:flex-initial shadow-inner lg:shadow-none',
						'menu_class'      => 'lg:flex lg:ml-4 lg:self-stretch divide-y lg:divide-y-0 divide-gray-200',
						'theme_location'  => 'primary',
						'li_class'        => 'group',
						'fallback_cb'     => false,
					)
				);
				?>

			</nav>
		</header>
	</div>
	<main id="content" class="site-content container mx-auto px-2 pt-24 lg:pt-28 max-w-screen-xl ">


		<!-- Start introduction -->
		<?php if (is_front_page()) : ?>


			<!-- End introduction -->
		<?php endif; ?>
</main>

<?php do_action('tailpress_content_end'); ?>


<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-gray-900 absolute left-0 right-0 py-12 mt-10 " role="contentinfo">
	<?php do_action('tailpress_footer'); ?>

	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 text-white max-w-screen-xl mx-auto justify-center px-2 gap-4">
		<section>
			<h4 class="uppercase font-semibold mb-5">Navigation</h4>
			<ul class="text-gray-300 ">
				<li>
					<a class="hover:text-gray-500" href="/impressum">» Impressum</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="/datenschutz">» Datenschutz</a>
				</li>
			</ul>
		</section>
		<section>
			<h4 class="uppercase font-semibold mb-5">Kontakt</h4>
			<div class="space-y-2">
				<b>Pastoralbüro des Sendungraums</b>
				<div class="flex space-x-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<line x1="18" y1="6" x2="18" y2="6.01" />
						<path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
						<polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
						<line x1="9" y1="4" x2="9" y2="17" />
						<line x1="15" y1="15" x2="15" y2="20" />
					</svg>
					<p> Freithof 7 <br>
						41460 Neuss
					</p>
				</div>


				<div class="flex space-x-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
					</svg>
					<p>02131 – 222327</p>
				</div>

				<div class="flex space-x-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
						<path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
						<rect x="7" y="13" width="10" height="8" rx="2" />
					</svg>
					<p> 02131 – 278624

					</p>
				</div>

				<div class="flex space-x-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<rect x="3" y="5" width="18" height="14" rx="2" />
						<polyline points="3 7 12 13 21 7" />
					</svg>
					<p> kirche@katholisch-neuss.de</p>
				</div>

				<div class="flex space-x-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<circle cx="12" cy="12" r="9" />
						<polyline points="12 7 12 12 15 15" />
					</svg>
					<div>
						<p class="space-y-2">
							Montag – Freitag
							<br>
							09:30 – 12:00 Uhr
						<p class="mb-2"></p>
						Montag – Donnerstag
						<br>
						14:30 – 17:00 Uhr
						</p>
					</div>

				</div>



			</div>
		</section>
		<section>
			<h4 class="uppercase font-semibold mb-5">Aktuelles</h4>
		</section>
		<section>
			<h4 class="uppercase font-semibold mb-5">Schnellzugriff</h4>
			<ul class="text-gray-300 mb-10">
				<li>
					<a class="hover:text-gray-500" href="/pfarrnachrichten">» Pfarrnachrichten</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="/pfarrbrief">» Pfarrbrief</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="/gottesdienste">» Gottesdienste</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="/kontakt">» Kontaktformular</a>
				</li>
			</ul>

			<input type="text" placeholder="Suche" class="rounded-xl text-gray-900">
		</section>
	</div>

	<div class="container mx-auto text-center text-gray-500 mt-10">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>


<?php wp_footer(); ?>

</body>

</html>
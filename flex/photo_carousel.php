<?php 
$scopeClass[] = 'bleed';
$scopedWrapInner = null;

$carouselClasses = array();

$zoomTF = true;

include(get_template_directory() . "/flex/_flex-header.php"); ?>


	<article class="chips-swiperjs swiper">
		<h3 class="chips-swiperjs-title col-max"><?php echo $cLoop['headline']; ?></h3>
		<?php 
		$outArray = $cLoop['photos'];
		if(!empty($outArray)){ ?>
		<figure class="chips-swiperjs-cycle-wrap swiper-wrapper <?php echo implode(" ", $carouselClasses); ?>">
			<?php foreach($outArray as $outSingle){
				echo '<div class="chips-swiperjs-cycle-single swiper-slide">';
				if($zoomTF){ echo '<div class="swiper-zoom-container">'; }
				
				echo wp_get_attachment_image ( $outSingle, 'large', false );
				
				if($zoomTF){ echo '</div>'; }
				echo '</div>';
			} ?>
		</figure>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div><?php 
		} ?>

	</article>

	<script type="module">
		import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

		const swiper = new Swiper(".swiper", {
			loop: true,
			spaceBetween: 30,
			keyboard: true,
			centeredSlides: true,
			freeMode: false,
			grabCursor: true,
			zoom: <?php if($zoomTF){ echo 'true'; } else { echo 'false'; } ?>,
			breakpoints: {
				640: {
					slidesPerView: 1.1,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 1.3,
					spaceBetween: 20,
				},
				1024: {
					slidesPerView: 1.75,
					spaceBetween: 30,
				},
			},
			// effect: 'fade',
			// autoplay: {
			// 	delay: 2500,
			// 	disableOnInteraction: true,
			// },
			//lazy: true, // <img data-src="./images/nature-6.jpg" class="swiper-lazy">

			// If we need pagination
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: ".swiper-scrollbar",
			// },
		});

	</script>
	<script nomodule>
		var carousEl = document.querySelector('.chips-swiperjs');
		carousEl.style.display = 'none';
	</script>
<?php include(get_template_directory() . "/flex/_flex-footer.php"); ?>
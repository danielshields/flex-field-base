<?php 
$scopeClass[] = 'bleed';
$scopedWrapInner = null;

$carouselClasses = array();

$carouselClasses[] = "carousel-wrap";
$carouselClasses[] = "carousel-controls";
// $carouselClasses[] = "carousel-dots";

include(get_template_directory() . "/flex/_flex-header.php"); ?>


<article class="chips-carousel">
	<h3 class="chips-carousel-title col-max"><?php echo $cLoop['headline']; ?></h3>
	<?php 
	$outArray = $cLoop['photos'];
	if(!empty($outArray)){ ?>
	<figure class="chips-carousel-cycle-wrap <?php echo implode(" ", $carouselClasses); ?>">
		<?php foreach($outArray as $outSingle){
			echo '<div class="chips-carousel-cycle-single">';
			echo wp_get_attachment_image ( $outSingle, 'large', false );
			echo '</div>';
		} ?>
	</figure>
	<?php } ?>
</article>

<?php include(get_template_directory() . "/flex/_flex-footer.php"); ?>
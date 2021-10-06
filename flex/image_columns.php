<?php 
if(empty($cLoop['images'])){ return; }
$scopeClass[] = 'bleed';
$scopeClass[] = 'cnt-' . count($cLoop['images']);
$scopedWrapInner = null;

include(get_template_directory() . "/flex/_flex-header.php"); 
foreach($cLoop['images'] as $imgKey => $imgLoop){ 
	$fImg = wp_get_attachment_image_src( $imgLoop, 'thumbnail' );
	$orientClass = orientClass($fImg[2]/$fImg[1]);
	?>

	<figure class="<?php echo $orientClass; ?>">
		<?php 
			echo wp_get_attachment_image ( $imgLoop, 'large', false ); 
			$attachment=get_post($imgLoop);
			$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
			$image_title = $attachment->post_title;
			$caption = $attachment->post_excerpt;

			if($caption){
				echo '<figcaption class="wp-caption-text">'.$caption.'</figcaption>';
			}
		?>

	</figure><?php
}

include(get_template_directory() . "/flex/_flex-footer.php"); ?>
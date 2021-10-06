<?php 
if(empty($cLoop['video'])){ return; }
// $scopeClass[] = $cLoop['display'];
$scopedWrapInner = null;
if(isset($cLoop['ar_w'])){
	$ar = $cLoop['ar_h']/$cLoop['ar_w'];
	$inlineStyle = ' style="padding-bottom:' . $ar*100 . '%"';
} else {
	$inlineStyle = null;
}
$coverImg = $cLoop['cover_image'];
if($coverImg && $coverImg !== ''){
	$scopeClass[] = 'has-cover';
}

include(get_template_directory() . "/flex/_flex-header.php"); 	
	if($coverImg && $coverImg !== ''){
		$coverImg = wp_get_attachment_image( $coverImg, 'large', "", array( "class" => "vid-poster" ) );
		$video = $cLoop['video'];
		if ( preg_match('/src="(.+?)"/', $video, $matches) ) {
			$src = $matches[1];
			$params = array(
				'controls'    => 1,
				'hd'        => 1,
				'autoplay' => 1
			);
			$new_src = add_query_arg($params, $src);
			$video = str_replace($src, $new_src, $video);
			$attributes = 'frameborder="0"';
			$video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);
			$video = str_replace(' src=', ' data-src=', $video);
			echo '
	<div class="vid-wrap"'.$inlineStyle.'>' . $video . $coverImg .'</div>';
		}
	} else {
		echo '
	<div class="vid-wrap"'.$inlineStyle.'>' . trim($cLoop['video']) . '</div>';
	}

	if($cLoop['caption'] && strlen($cLoop['caption']) > 5){
		echo '<div class="flex-vid-caption caption">' . trim($cLoop['caption']) . '</div>';
	}

include(get_template_directory() . "/flex/_flex-footer.php"); ?>
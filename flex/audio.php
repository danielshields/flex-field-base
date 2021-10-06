<?php 
$scopeClassInner[] = 'wyg';
$scopeClassInner[] = $cLoop['display'];

include(get_template_directory() . "/flex/_flex-header.php");

if($cLoop['type'] === 'file'){
	echo '		<audio src="' . $cLoop['file'] . '" controls"></audio>';
} else {
	echo '	
		' . $cLoop['embed'];
}
if($cLoop['caption'] && strlen($cLoop['caption']) > 5){
	echo '<div class="flex-vid-caption caption">' . trim($cLoop['caption']) . '</div>';
}

include(get_template_directory() . "/flex/_flex-footer.php"); ?>
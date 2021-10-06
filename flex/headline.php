<?php 
$headlineEl = 'h2';
$scopedWrapInner = null;
if(isset($cLoop['exclude_tf']) && $cLoop['exclude_tf']){
	$scopeClass[] = ' headline_hidden';
}

include(get_template_directory() . "/flex/_flex-header.php"); ?>

<?php if(isset($cLoop['subnav_tf']) && $cLoop['subnav_tf']){
	echo '	<a name="' . sanitize_title($cLoop['headline']) . '" class="page-anchor">'.$cLoop['headline'].'</a>';
} ?>

	<<?php echo $headlineEl; ?>><?php echo $cLoop['headline']; ?></<?php echo $headlineEl; ?>><?php

include(get_template_directory() . "/flex/_flex-footer.php"); ?>


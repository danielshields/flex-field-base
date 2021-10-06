<?php 
if(empty($cLoop['callouts'])){ return; }
$scopedWrapInner = null;

include(get_template_directory() . "/flex/_flex-header.php");

foreach($cLoop['callouts'] as $co){
	echo '
	<a href="' . get_permalink($co) . '">' . get_the_title($co) . '</a>';
}


include(get_template_directory() . "/flex/_flex-footer.php"); ?>
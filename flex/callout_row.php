<?php 
if(empty($cLoop['callouts'])){ return; }
$scopedWrapInner = null;

include(get_template_directory() . "/flex/_flex-header.php");

foreach($cLoop['callouts'] as $co){
	if(isset($co['target_page']) && !empty($co['target_page'])){
		echo '
	<a href="' . get_permalink($co['target_page']->ID) . '">' . get_the_title($co['target_page']->ID) . '</a>';
	}
}


include(get_template_directory() . "/flex/_flex-footer.php"); ?>
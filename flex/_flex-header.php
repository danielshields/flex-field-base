<?php 
// START OF BASE WRAP
if($scopedWrap){
	echo '
<' . $scopedWrap . ' class="section-'.trim($cLoop['acf_fc_layout'].' '.implode(' ', $scopeClass)) . '">';
}
if($scopedWrapInner){
	echo '
	<' . $scopedWrapInner . ' class="'.trim(implode(' ', $scopeClassInner)) . '">';
}
// END OF BASE WRAP

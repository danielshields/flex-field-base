<?php 
$scopeClassInner[] = $cLoop['display_size'];
$scopeClassInner[] = $cLoop['location'];

include(get_template_directory() . "/flex/_flex-header.php"); ?>

		<?php echo splitMore($cLoop['quote']); ?>

		<span class="attribution"><?php echo $cLoop['attribution']; ?></span><?php

include(get_template_directory() . "/flex/_flex-footer.php"); ?>
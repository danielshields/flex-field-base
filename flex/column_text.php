<?php 
$scopedWrapInner = null;

include(get_template_directory() . "/flex/_flex-header.php"); ?>

	<article class="text-col wyg"><?php echo trim($cLoop['text_column_1']); ?></article>
	<article class="text-col wyg"><?php echo trim($cLoop['text_column_2']); ?></article>
<?php include(get_template_directory() . "/flex/_flex-footer.php"); ?>
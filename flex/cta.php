<?php 
if(empty($cLoop['links'])){ return; }
$scopedWrapInner = null;

include(get_template_directory() . "/flex/_flex-header.php"); ?>

<?php foreach($cLoop['links'] as $link){ ?>
	<a href="<?php 
		if($link['link_type'] === 'internal'){
			echo get_permalink($link['link_target']);
		} else {
			echo $link['url_custom'];
		}
	?>"><?php echo $link['link_text']; ?></a> <?php } ?>
<?php include(get_template_directory() . "/flex/_flex-footer.php"); ?>
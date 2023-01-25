<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>


<?php 
	$raspisanie_field_1 = $atts['raspisanie_field_1'];
	$raspisanie_field_2 = $atts['raspisanie_field_2'];
	$raspisanie_field_3 = $atts['raspisanie_field_3'];
?>

<div class="w-row content-list content-list">
	<div class="w-col w-col-2 w-col-medium-6 w-col-small-6 w-col-tiny-6">
		<div><?php echo $raspisanie_field_1 ; ?></div>
	</div> 
	<div class="w-col w-col-10 w-col-medium-6 w-col-small-6 w-col-tiny-6">
		<div>
			<a href="<?php echo $raspisanie_field_3 ; ?>"><?php echo $raspisanie_field_2 ; ?></a>
		</div>
	</div> 
</div> 
		
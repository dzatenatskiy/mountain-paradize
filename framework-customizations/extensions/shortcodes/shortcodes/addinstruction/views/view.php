<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

	<div class="instruction">
		<div class="row w-row">
			<div class="w-col w-col-4">
				<img src="<?php echo $atts['instruction_image']['url']; ?>" alt="">
			</div> 
			<div class="w-col w-col-8 page-content">
				<?php echo $atts['instruction_text']; ?>
			</div> 
		</div> 
	</div>
		

		

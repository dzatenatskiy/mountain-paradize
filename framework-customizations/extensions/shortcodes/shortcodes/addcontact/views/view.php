<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<?php 
	$contact_text_1 = $atts['contact_text_1'];
	$contact_text_2 = $atts['contact_text_2'];
	$contact_text_3 = $atts['contact_text_3'];
	$contact_text_4 = $atts['contact_text_4'];
	$contact_text_5 = $atts['contact_text_5'];
	$contact_text_6 = $atts['contact_text_6'];
?>

		<div class="contact">
			<p>
				<i class="fa fa-mobile" aria-hidden="true"></i>
				<span><?php echo $contact_text_1; ?></span>
			</p> 
			<p>
				<i class="fa fa-vk"></i>
				<a href="<?php echo $contact_text_2; ?>">
					<span><?php echo $contact_text_3; ?></span>
				</a>
			</p> 
			<p>
				<i class="fa fa-vk"></i>
				<a href="<?php echo $contact_text_4; ?>">
					<span><?php echo $contact_text_5; ?></span>
				</a>
			</p>
			<p>
				<i class="fa fa-map-marker"></i>
					<span><?php echo $contact_text_5; ?></span>
			</p>
		</div> 
		

		

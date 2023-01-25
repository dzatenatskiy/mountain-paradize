<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
		<div class="row">
				<div class="col-md-4">
					<div class="block review-block">
						<img src="<?php echo $atts['about_image']['url']; ?>" alt="">
						<div class="review-img-heading">
							<a href="<?php echo $atts['about_link']; ?>"><h3><?php echo $atts['about_link_text']; ?></h3></a>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="block tab-block">
							<h2><?php echo $atts['about_heading']; ?></h2>
							<?php echo $atts['about_text']; ?>
					</div>
				</div>
		</div> 
		

		

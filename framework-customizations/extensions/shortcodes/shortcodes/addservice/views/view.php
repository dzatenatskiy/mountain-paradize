<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

							<div class="grid-item route-layer w-col">
								<img src="<?php echo $atts['mr_image']['url']; ?>" alt="">
								<div class="route-description">
									<h3 class="route-description-header"><?php echo $atts['mr_heading']; ?></h3>
									<p class="route-desctiption-text">
										<span class="route-description-span"><?php echo $atts['mr_price']; ?></span>
										<?php echo $atts['mr_date']; ?>
									</p>
									<a class="read-more w-button" href="<?php echo $atts['mr_link']; ?>">ПОДРОБНЕЕ</a>
								</div>
							</div>


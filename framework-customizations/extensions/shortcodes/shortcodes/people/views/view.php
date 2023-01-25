<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>


	<div class="row">

		<div class="people-wrp">
		
				<?php $adv_field = $atts['adv_field']; 
					if( $adv_field ) :
					foreach( $adv_field as $adv ) { ?>

						<div class="people-block-wrap col-sm-6 col-md-3">
							<div class="block">

								<?php echo "<img src='" . $adv['option_1']['url'] . "'>" ; ?>

								<div class="people-block">

									<div class="people-heading"><?php echo $adv['option_2']; ?></div>
									<div class="line"></div>

									<?php echo $adv['option_3']; ?>
									
								</div>

							</div>
						</div>

					<?php }
					else :
					endif ;
				?>

		</div>

	</div>
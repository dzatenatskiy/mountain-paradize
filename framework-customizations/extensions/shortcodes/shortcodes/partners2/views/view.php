<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="partners2-wrap">

	<h2 class="h1"><?php echo $atts['heading']; ; ?></h2>

			<div class="partners2 owl-carousel">

				<?php $adv_field = $atts['adv_field']; 
					$i = 1;
					if( $adv_field ) :
					foreach( $adv_field as $adv ) { ?>

						<div class="partners2-img">

								<?php echo "<img src='" . $adv['option_1']['url'] . "'>" ; ?>
							
						</div>

					<?php 
					$i++;}
					else :
					endif ;
				?>
				
			</div>
	
</div>

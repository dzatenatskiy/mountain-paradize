<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="gallery-wrap">

	<h2><?php echo $atts['heading']; ; ?></h2>

			<div class="gallery">

				<div class="row">

					<?php $adv_field = $atts['adv_field']; 
					$i = 1;
					if( $adv_field ) :
					foreach( $adv_field as $adv ) { ?>

						<div class="col-md-3 col-sm-4 col-xs-6">

								<a class="gallery_item_img" href="<?php echo $adv['option_1']['url']; ?>"><?php echo "<img src='" . $adv['option_1']['url'] . "'>" ; ?></a>
							
						</div>

					<?php 
					$i++;}
					else :
					endif ;
				?>

				</div>
				
			</div>
	
</div>

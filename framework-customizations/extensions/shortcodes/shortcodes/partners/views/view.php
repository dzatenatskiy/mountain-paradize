<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="partners-wrap">

	<div class="row">
		
		<div class="col-md-6 hidden-xs hidden-sm">
			<img src="<?php echo $atts['image']['url']; ?>" alt="">

			<div class="partners-img">

				<?php $adv_field = $atts['adv_field']; 
					$i = 1;
					if( $adv_field ) :
					foreach( $adv_field as $adv ) { ?>

						<div class="img-<?php echo $i; ?>">

								<?php echo "<img src='" . $adv['option_1']['url'] . "'>" ; ?>
							
						</div>

					<?php 
					$i++;}
					else :
					endif ;
				?>
				
			</div>

		</div>
		<div class="col-md-6">

			<div class="block contact-block">

				<?php echo $atts['text_field']; ; ?>
				<a href="<?php echo $atts['link']; ; ?>" class="btn btn-default"><?php echo $atts['text']; ; ?></a>

			</div>

		</div>

	</div>
	
</div>

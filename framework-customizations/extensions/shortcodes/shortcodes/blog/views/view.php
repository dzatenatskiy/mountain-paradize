<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

	<div class="w-col w-col-12">
		<div class="blog-annoucment">
					<div class="blog-annoucment-image">
						<img src="<?php echo $atts['blg_image']['url']; ?>" alt="">
					</div> 
					<div>
						<h2 class="blog-annoucment-header"><a href="<?php echo $atts['blg_link']; ?>"><?php echo $atts['blg_heading']; ?></a></h2>
						<p class="blog-data"><?php echo $atts['blg_date']; ?></p>
						<p class="blog-announcment-text"><?php echo $atts['blg_text']; ?></p">
						<a class="blog-read-more" href="<?php echo $atts['blg_link']; ?>">Подробнее<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
	</div>
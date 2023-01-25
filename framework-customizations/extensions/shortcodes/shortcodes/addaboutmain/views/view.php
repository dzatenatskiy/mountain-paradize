<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<?php 
	$about_text = $atts['about_text'];
	$about_image = $atts['about_image']; $about_image_url = $about_image['url']
?>
<div class="main" id="routes">
	<div class="about-me" id="about-me">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
        <img sizes="(max-width: 767px) 96vw, (max-width: 991px) 354px, 460px" src="<?php echo $about_image_url ; ?>" /></div>
        <div class="about-me-row w-col w-col-6">
          <h3 class="about-me-header">Обо мне</h3>
          <?php echo $about_text; ?>
          <a class="read-more w-button" href="<?php echo $about_link; ?>">ПОДРОБНЕЕ</a></div>
      </div>
    </div>
  </div>
 </div>
		
		

		

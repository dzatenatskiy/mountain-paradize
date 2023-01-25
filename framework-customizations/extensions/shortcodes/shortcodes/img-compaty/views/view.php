<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="row">
    
    <div class="col-md-6">
    
    
       <div class="block contact-block text-contact-block">
    
            <?php echo $atts['text']; ; ?> 
            
        </div>
        
        

    </div>

    <div class="col-md-6">
        
        <div class="company-name-wrap">
            <div class="elementor-element-populated contact-img">
                <img class="img_repeat" src="<?php echo $atts['image1']['url']; ?>" alt="">

                <img class="img_repeat" src="<?php echo $atts['image']['url']; ?>" alt="">
            </div>
            
        </div>

    </div>

</div>
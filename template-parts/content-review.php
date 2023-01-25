<?php
   /**
    * Template part for displaying posts
    *
    * @link https://codex.wordpress.org/Template_Hierarchy
    *
    * @package mountine-paradise
    */
   
   ?>
<div class="row review-row">
   <div class="col-md-12">
      <div class="block block-main-blog block-note-wrap">
         <article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
            <div itemprop="articleBody">
               <?php
                  the_content( sprintf(
                  	wp_kses(
                  		/* translators: %s: Name of current post. Only visible to screen readers */
                  		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mountine-paradise' ),
                  		array(
                  			'span' => array(
                  				'class' => array(),
                  			),
                  		)
                  	),
                  	get_the_title()
                  ) );
                  
                  wp_link_pages( array(
                  	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mountine-paradise' ),
                  	'after'  => '</div>',
                  ) );
                  ?>
            </div>
            <?php echo fw_get_db_post_option($post->ID)['blog_link']; ?>
         </article>
         <!-- #post-<?php the_ID(); ?> -->
      </div>
      <div class="d-flex_block marginTop">
         <div class="block social-block">
            <h3>Поделитесь с друзьями в соц сетях:</h3>
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-curtain data-size="l" data-services="vkontakte,odnoklassniki,twitter,lj"></div>
         </div>
         <div class="block social-block-accent">
            <div class="row">
               <div class="col-xs-12 col-md-12">
                  <span>Сайт закрыл и забыл, а в соцсетях рука всегда на пульсе! <br>
                  Подписывайся, чтобы быть в курсе всей движухи.</span>
               </div>
               <div class="col-xs-6">
                  <div class="social-block_item">                                 
                     <a href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>" class="hidden-xs hidden-sm" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/vkontakte1.png" alt=""><span class="social-block_smalltxt">Вконтакте</span></a>
                     <a href="<?php echo fw_get_db_settings_option('settings_vk_link_m'); ?>" class="hidden-md hidden-lg" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/vkontakte1.png" alt=""><span class="social-block_smalltxt">Вконтакте</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row review-row">
   <div class="col-md-12">
      <h2 class="page-heading page-heading-dark">Другие статьи</h2>
      <div class="note-wrap-main note-wrap-page">
         <?php
            $args = array( 'post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC');
            $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <div class="col-sm-6 col-md-3 review-wrp">
            <div class="review-img">
               <?php the_post_thumbnail(); ?>
               <div class="review-img_hover"></div>
            </div>
            <div class="review-description">
               <a href="<?php echo get_permalink(); ?>">
                  <h3><?php echo the_title();?></h3>
               </a>
               <div class="line"></div>
               <?php echo kama_excerpt( array('maxchar'=>100) ); ?>
               <a href="<?php echo get_permalink(); ?>" class="btn btn-default">ПОДРОБНЕЕ</a>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
   </div>
</div>


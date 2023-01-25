<?php
   /**
    * Template part for displaying posts
    *
    * @link https://codex.wordpress.org/Template_Hierarchy
    *
    * @package mountine-paradise
    */
   
   ?>
<div class="row">
   <div class="col-md-12 block block-main-blog">
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
</div>
<div class="row">
   <div class="col-md-9 col-xs-offset-0 block social-block">
      <h3>Поделитесь с друзьями в соц сетях:</h3>
      <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
      <script src="//yastatic.net/share2/share.js"></script>
      <div class="ya-share2" data-services="vkontakte,odnoklassniki,twitter,lj"></div>
   </div>
</div>
<h2 class="page-heading page-heading-dark">ОТЧЕТЫ</h2>
<div class="note-wrap-main note-wrap-page owl-carousel">
   <?php
      $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'order' => 'ASC');
      $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
   <div class="blog-wrap block">
      <div class="blog-img">
         <?php the_post_thumbnail(); ?>
      </div>
      <div class="blog-description">
         <h2 itemprop="name headline"><span><?php echo the_title();?></span></h2>
         <h4><?php echo fw_get_db_post_option($post->ID)['blog_field_1']; ?></h4>
         <div itemprop="description"><?php echo the_excerpt(); ?></div>
         <a href="<?php echo get_permalink(); ?>" class="btn btn-default" itemprop="mainEntityOfPage">ПОДРОБНЕЕ</a>
      </div>
   </div>
   <?php endwhile; ?>                
</div>




<?php
   /**
    * The template for displaying archive pages
    *
    * @link https://codex.wordpress.org/Template_Hierarchy
    *
    * @package mountine-paradise
    */
   add_filter( 'get_the_archive_title', function ($title) {
   
       if ( is_post_type_archive() ) {
   
               $title = post_type_archive_title( '', false );
   
           } 
   
       return $title;
   
   });
   
   get_header(); ?>
<style type="text/css">
   .__head {background-image: url(<?php echo fw_get_db_settings_option('page_review')['url']; ?>);}
   @media (max-width: 480px) {
   .__head {background-image: url(<?php echo fw_get_db_settings_option('page_review_m')['url']; ?>);}
   }
</style>
<section class="__head">
   <div id="__head">
      <div class="page-heading-item">
         <div class="container">
            <h1 class="page-heading" itemprop="name"><?php 
               add_filter('document_title_parts', function( $parts ){
               	if( isset($parts['site']) ) unset($parts['site']);
               	return $parts;
               });
               echo wp_get_document_title(); 
               ?></h1>
         </div>
         <div class="breadcrumbs-custom">
            <div class="container">
               <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
         </div>
         </div>
      </div>
   </div>
</section>
<section class="tracks">
   <div class="container">
   <div class="row">

   <div class="col-md-12">
      <div class="row">
         <div class="review">
            <?php
               $args = array( 'post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC');
               $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 __rev_item">
               <div class="review-img">
                  <a href="<?php echo get_permalink(); ?>">
                     <?php the_post_thumbnail(); ?>
                     <div class="review-img_hover"></div>
                  </a>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 __rev_item">
               <div class="review-description">
                  <a href="<?php echo get_permalink(); ?>">
                     <h3><?php echo the_title();?></h3>
                  </a>
                  <div class="line"></div>
                  <?php echo kama_excerpt( array('maxchar'=>100) ); ?>
                  <a href="<?php echo get_permalink(); ?>" class="btn btn-default">Подробнее</a>
                  <a href="https://горный-рай.рф/%d1%80%d0%b0%d1%81%d0%bf%d0%b8%d1%81%d0%b0%d0%bd%d0%b8%d0%b5-%d0%bf%d0%be%d1%85%d0%be%d0%b4%d0%be%d0%b2/" class="btn btn-default">Расписание</a>
               </div>
            </div>
            <?php endwhile; ?>
         </div>
      </div>
   </div>
</div>
</div>
</section>
<?php get_footer();


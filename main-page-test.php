<?php
   /**
    * Template Name: Главная tect
    *
    * Template Post Type: page
    *
    * @link https://codex.wordpress.org/Template_Hierarchy
    *
    * @package blank
    */
   get_header(); ?>
<script>
   // Get the video
   var video = document.getElementById("myVideo");
   
   // Get the button
   var btn = document.getElementById("myBtn");
   
   // Pause and play the video, and change the button text
   function myFunction() {
     if (video.paused) {
       video.play();
       btn.innerHTML = "Pause";
     } else {
       video.pause();
       btn.innerHTML = "Play";
     }
   }
</script>
<style type="text/css">
   .item1 {
   background-image: url(<?php echo fw_get_db_settings_option('slider_image_1')['url']; ?>);
   }
   @media (max-width: 480px) {
   .item1 {
   background-image: url(<?php echo fw_get_db_settings_option('slider_image_1_m')['url']; ?>);
   }
   }
</style>
<section class="myVideo">
   <video autoplay muted loop id="myVideo">
      <source src="<?php the_field('video'); ?>" type="video/mp4">
   </video>
   <div class="videoImg"><img src="https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2017/10/18699.jpg" alt=""></div>
   <div class="content content_h">
      <h1 class="slider-heading"><?php echo fw_get_db_settings_option('slider_h1_11'); ?>
         <br><?php echo fw_get_db_settings_option('slider_h1_12'); ?>
      </h1>
      <div class="size-default_title">
         <h2><?php the_field('header_title'); ?></h2>
      </div>
   </div>
   <?php 
      $rows = get_field('benefits');
      if( $rows ) {
          echo '<ul class="benefits">';
          foreach( $rows as $row ) {
              $image = $row['image'];
              echo '<li> ';?> 
   <a href="<?php echo $row['link'] ?>">
      <?php
         echo wp_get_attachment_image( $image, 'full' ); ?> 
      <img src="<?php echo $image['url']; ?>" /> 
      <?php
         echo wpautop( $row['text'] );
         echo '</a></li>';
         }
         echo '</ul>';
         }
         ?>
      <div class="arrow_wrap">
         <div class="arrow">
            <i class="fa fa-chevron-down"></i>
         </div>
      </div>
</section>
<section class="description_myself">
<div class="container">
<div class="row">
<div class="col-md-6">
<h3><?php the_field('title_main'); ?></h3>
<div class="elementor-divider"> </div>
<div class="about_myself">
<?php the_field('text_main'); ?>
</div>
</div>
<div class="col-md-6">
<div class="elementor-element-populated">
<?php 
   $image = get_field('pictures');
   if( !empty( $image ) ): ?>
<img class="img_repeat" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
</div>
</div>
</div>
</section>
<section class="travel_section_wrap">
<?php 
   $rows = get_field('travel');
   
   if( $rows ) {
       $link = get_sub_field('link');
       echo '<div class="travel_wrap">';
       foreach( $rows as $row ) {
           $image = $row['image'];?>
<a href="<?php echo $row['link']; ?>">
<div class="travel" style="background-image: url(<?php echo $image['url']; ?>);">                        
<?php  echo wp_get_attachment_image( $image, 'full' ); ?>                             
<div class="name_wrap">
<h2 class="animated tada" data-wow-duration="20s" data-wow-delay="50s"><?php echo $row['name'];?></h2> 
</div>                          
</div>
</a> 
<?php
   }
   echo '</div>';
   }
   ?>         
</section>
<section class="tracks">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="page-heading-main pg-heading-dark"><span>БЛИЖАЙШИЕ МАРШРУТЫ</span><a href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BC%D0%B0%D1%80%D1%88%D1%80%D1%83%D1%82%D1%8B/" class="btn btn-default btn-main">Посмотреть все маршруты</a></h3>
            <div class="elementor-divider"> </div>
            <div class="gridt">
               <?php
                  $book_args = array(
                      'post_type' => 'service',
                      'posts_per_page' => -1,
                      'orderby' => 'meta_value_num',
                      'meta_key' => 'number',
                      'order' => 'ASC',
                      'paged' => $paged
                  );
                  $book_loop = new WP_Query($book_args); ?>
               <?php
                  if ($book_loop->have_posts()):
                      while ($book_loop->have_posts()): $book_loop->the_post(); ?>
               <div class="grid-item col-sm-6 col-md-4 col-lg-4 grid-item-main">
                  <div class="track-wrap block">
                     <div class="track-item">
                        <a href="<?php echo get_permalink(); ?>">
                        <?php the_post_thumbnail(array(257, 225)); ?>
                        </a>
                     </div>
                     <div class="track-description">
                        <?php $post_cot_id = get_the_ID(); ?>
                        <?php $mount_terms = wp_get_post_terms($post_cot_id, 'service_type', array('fields' => 'names')); ?>
                        <?php $mount_id = wp_get_post_terms($post_cot_id, 'service_type', array('fields' => 'ids')); ?>
                        <div class="track-cat-wrap">
                           <p><?php echo get_field('area'); ?></p>
                           <a href="<?php echo get_permalink(); ?>">
                              <h2><?php echo the_title(); ?></h2>
                           </a>
                        </div>
                        <div class="row">
                           <div class="col-xs-5">
                              <p>Длительность:</p>
                           </div>
                           <div class="col-xs-7">
                              <div class="track-days"><?php echo get_post_meta($post_cot_id, 'days_meta', true); ?></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-7">
                              <p class="diff-heading">
                                 Сложность:
                              <div class="diff-wrap">
                                 <div class="diff">
                                    <?php
                                       $diff1 = fw_get_db_settings_option('diff_text_1');
                                       $diff2 = fw_get_db_settings_option('diff_text_2');
                                       $diff3 = fw_get_db_settings_option('diff_text_3');
                                       
                                       $diff = get_post_meta($post_cot_id, 'diff_meta', true);
                                       echo '?';
                                       ?>
                                    <div class="diff-descr">
                                       <?php
                                          if ($diff == 1) {
                                              echo $diff1;
                                          } elseif ($diff == 2) {
                                              echo $diff2;
                                          } elseif ($diff == 3) {
                                              echo $diff3;
                                          }
                                          ?>
                                    </div>
                                 </div>
                              </div>
                              </p>
                           </div>
                           <div class="col-xs-5">
                              <?php
                                 if ($diff == 1) {
                                     echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d1.svg' alt=''>";
                                 } elseif ($diff == 2) {
                                     echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d2.svg' alt=''>";
                                 } elseif ($diff == 3) {
                                     echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d3.svg' alt=''>";
                                 }
                                 ?>
                           </div>
                        </div>
                        <?php
                           $service = get_field('serice');
                           if ($service) :
                               $i = -1;
                               foreach ($service as $adv) {
                                   $i++;
                               }
                           else :
                           endif;
                           
                           if ($i == 0) :?>
                        <div class="track-data-wrap">
                           <p>Ближайшая дата:</p>
                           <?php $service = get_field('serice'); ?>
                           <p class='track-data'>
                              <?php foreach ($service as $adv) {
                                 echo $adv['serice_data'];
                                 } ?>
                           </p>
                        </div>
                        <?php else : ?>
                        <div class="track-data-wrap">
                           <p>Ближайшая дата:</p>
                           <?php $service = get_field('serice'); ?>
                           <div class="service-n-select">
                              <select class="service-main-nice"
                                 data-priceid="<?php echo $post_cot_id; ?>">
                              <?php foreach ($service as $adv) {
                                 echo "<option value='" . $adv['serice_price'] . "'>" . $adv['serice_data'] . "</option>";
                                 } ?>
                              </select>
                              <div class="pricef"></div>
                           </div>
                           <p class="track-data-count">Еще<span>
                              <?php
                                 if ($i == 1) :
                                     echo $i . '</span>дата</p>';
                                 elseif ($i == 5) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 6) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 7) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 8) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 9) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 10) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 11) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 12) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 13) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 14) :
                                     echo $i . '</span>дат</p>';
                                 elseif ($i == 15) :
                                     echo $i . '</span>дат</p>';
                                 else :
                                     echo $i . '</span>даты</p>';
                                 endif;
                                 ?>
                        </div>
                        <?php endif;
                           ?>
                        <div class="row price-wrap">
                           <div class="col-xs-6">
                              <div class="price">
                                 <?php $total_price = get_post_meta($post_cot_id, 'sale_meta', true);
                                    $prst = get_field('prist', $post_cot_id);
                                    echo "<span>" . $prst . "</span>";
                                    if ($total_price) { ?>
                                 <div class="price-id price-id-<?php echo $post_cot_id; ?>"><?php echo $total_price ?> </div>
                                 <i class="fa fa-rub" aria-hidden="true"></i>
                                 <?php } else ?>
                              </div>
                           </div>
                           <div class="sec-prc pull-right">
                              <?php $pegular_price = get_post_meta($post_cot_id, 'price_meta', true); ?>
                              <?php
                                 if ($pegular_price) {
                                     echo $pegular_price
                                     ?><i class="fa fa-rub" aria-hidden="true"></i>
                              <?php } else ?>
                           </div>
                           <div class="col-xs-6">
                              <div class="btn-wrap">
                                 <a href="<?php echo get_permalink(); ?>"
                                    class="btn btn-default">Подробнее</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;
                  
                  else:
                  get_template_part('content-none');
                  endif;
                  wp_reset_postdata();
                  
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="block block-main">
         <div class="row">
            <div class="col-md-12">
               <h3 class="pg-heading-dark"><?php echo fw_get_db_settings_option('main_h1'); ?></h3>
               <div class="elementor-divider center-divider"> </div>
               <div class="about_myself about_myself_wpd">
                  <?php echo fw_get_db_settings_option('main_text'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();


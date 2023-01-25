<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="related-wrap">

	<h2 class="h1"><?php echo $atts['heading']; ; ?></h2>

			<div class="relate">
                    <?php 
                        $book_args = array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'orderby'           => 'meta_value_num',
        'meta_key'          => 'number',
        'order'             => 'ASC',
        'paged' => $paged
    );
    $book_loop = new WP_Query($book_args);?>
    <?php
    if( $book_loop->have_posts() ):
        while( $book_loop->have_posts() ): $book_loop->the_post(); ?>
                <div class="grid-item grid-item-main col-sm-6 col-md-3">
                        <div class="track-wrap block">
              <div class="track-item">
                <a href="<?php echo get_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
              <div class="track-description">
                <?php $post_cot_id = get_the_ID(); ?>

                <?php $mount_terms = wp_get_post_terms( $post_cot_id, 'service_type', array('fields' => 'names') ); ?>
                <?php $mount_id = wp_get_post_terms( $post_cot_id, 'service_type', array('fields' => 'ids') ); ?>
                <div class="track-cat-wrap">
                  <p><?php echo get_field( 'area' ); ?></p>

                  <a href="<?php echo get_permalink(); ?>">
                    <h2><?php echo the_title(); ?></h2>
                  </a>
                  
                </div>

                  <div class="hr2"></div>

                  <div class="row">

                    <div class="col-xs-5 col-md-6">
                      
                      <p>Длительность:</p>

                    </div>

                    <div class="col-xs-7 col-md-6">
                      <div class="track-days"><?php echo get_post_meta( $post_cot_id, 'days_meta', true ); ?></div>
                    </div>

                  </div>

                  <div class="row">
                    
                    <div class="col-xs-7 col-md-6">
                      
                      <p class="diff-heading">
                      Сложность: 
                      <div class="diff-wrap">
                        <div class="diff">
                        <?php 
                          $diff1 = fw_get_db_settings_option('diff_text_1');
                          $diff2 = fw_get_db_settings_option('diff_text_2');
                          $diff3 = fw_get_db_settings_option('diff_text_3');
                        
                          $diff = get_post_meta( $post_cot_id, 'diff_meta', true );
                          echo '?';
                        ?>
                        <div class="diff-descr">
                          <?php
                            if ($diff == 1) {
                              echo $diff1;
                            }
                            elseif ($diff == 2) {
                              echo $diff2;
                            }
                            elseif ($diff == 3) {
                              echo $diff3;
                            }
                          ?>
                        </div>
                        </div>
                      </div>
                    </p>

                    </div>

                    <div class="col-xs-5 col-md-6">
                      
                      <?php
                        if ($diff == 1) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d1.svg' alt=''>";
                        }
                        elseif ($diff == 2) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d2.svg' alt=''>";
                        }
                        elseif ($diff == 3) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d3.svg' alt=''>";
                        }
                      ?>

                    </div>

                  </div>

                  <?php
                    $service = get_field( 'serice' );
                    if( $service ) :
                      $i = -1;
                      foreach( $service as $adv ) {
                        $i++;
                      }
                      else :
                    endif ;

                  if($i == 0) :?>
                    <div class="track-data-wrap"><p>Ближайшая дата:</p>
                    <?php $service = get_field( 'serice' );?>
                        <p class='track-data''>
                     <?php  foreach( $service as $adv ) {
                            echo $adv['serice_data'];
                      } ?>
                        </p>
                    </div>
                <?php else : ?>
                  <div class="track-data-wrap">
                    <p>Ближайшая дата:</p>
                    <?php $service = get_field( 'serice' ); ?>
                      <div class="service-n-select">
                        <select class="service-main-nice" data-priceid="<?php echo $post_cot_id; ?>">
                    
                          <?php foreach( $service as $adv ) {
                                      echo "<option value='" . $adv['serice_price'] . "'>" . $adv['serice_data'] ."</option>";
                                }  ?>
                        </select>
                        <div class="pricef"></div>
                      </div>

                    <p class="track-data-count">Еще<span>
                      <?php 
                        if($i == 1) :
                          echo $i . '</span>дата</p>';  
                        elseif($i == 5) :
                          echo $i . '</span>дат</p>';  
                        elseif($i == 6) :
                          echo $i . '</span>дат</p>';
                      elseif($i == 7) :
                          echo $i . '</span>дат</p>';
                      elseif($i == 8) :
                          echo $i . '</span>дат</p>';  
                        else :
                          echo $i . '</span>даты</p>'; 
                        endif ;
                      ?>


                  </div>
                <?php endif ;
                ?>

                

                <div class="row price-wrap">
                  
                  <div class="col-xs-6 col-md-6">
                    <div class="price"> 
                      <?php $total_price = get_post_meta( $post_cot_id, 'sale_meta', true );
                      $prst = get_field( 'prist', $post_cot_id ); 
                      echo "<span>" . $prst . "</span>";
                      if ($total_price  ) { ?>
                        <div class="price-id price-id-<?php echo $post_cot_id; ?>"><?php echo $total_price ?> </div>
                        <i class="fa fa-rub" aria-hidden="true"></i>
                      <?php } else ?>
                    </div>
                  </div>
                  <div class="sec-prc pull-right">
                      <?php $pegular_price = get_post_meta( $post_cot_id, 'price_meta', true ); ?>
                      <?php 
                      if ($pegular_price ) {
                        echo $pegular_price 
                        ?><i class="fa fa-rub" aria-hidden="true"></i>
                      <?php } else ?>
                    </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="btn-wrap">
                      <a href="<?php echo get_permalink(); ?>" class="btn btn-default">ПОДРОБНЕЕ</a>
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

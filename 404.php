<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mountine-paradise
 */

get_header(); ?>
<section class="__head">
	<div id="__head">
		<div class="page-heading-item" style="background-image: url(<?php echo fw_get_db_settings_option('page_image')['url']; ?>);">
			<div class="container">
				<h2 class="page-heading">Данной страницы не существует</h2>
			</div>
      <div class="breadcrumbs-custom">
				<div class="container">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">

				<div class="row">
					
					<div class="col-md-3 hidden-xs hidden-sm d-none">
                            <aside>
					                    <div class="block">
					                        <div class="row">
					                            <a href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BC%D0%B0%D1%80%D1%88%D1%80%D1%83%D1%82%D1%8B/">
					                            <div class="filter-wrap">
					                                <div class="col-xs-4">
					                                    <img src="<?php echo get_template_directory_uri() . "/img/tourist.jpg" ?>" alt="">
					                                </div>
					                                <div class="col-xs-8">
					                                    <h2><span>ПОДОБРАТЬ <br> ПОХОД</span><i class="fa fa-arrow-down" aria-hidden="true"></i></h2>
					                                </div>
					                            </div>
					                            </a>
					                        </div>
					                    </div>
					                    <div class="block">
					                        <div class="row">
					                            <a href="<?php echo esc_url( home_url( '/%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D0%B8/' ) ); ?>">
					                                <div class="col-xs-4">
					                                    <img src="<?php echo get_template_directory_uri() . "/img/rukzak.jpg" ?>" alt="">
					                                </div>
					                                <div class="col-xs-8">
					                                    <h2><span>ИНСТРУКЦИИ</span></h2>
					                                </div>
					                            </a>
					                        </div>
					                    </div>
					                    <div class="block">
					                        <div class="row">
					                            <a href="<?php echo esc_url( home_url( '/%D1%80%D0%B0%D1%81%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE%D1%85%D0%BE%D0%B4%D0%BE%D0%B2/' ) ); ?>">
					                                <div class="col-xs-4">
					                                    <img src="<?php echo get_template_directory_uri() . "/img/calendar.jpg" ?>" alt="">
					                                </div>
					                                <div class="col-xs-8">
					                                    <h2><span>РАСПИСАНИЕ</span></h2>
					                                </div>
					                            </a>
					                        </div>
					                    </div>
					                        <?php $sale_text = fw_get_db_settings_option('sale_text'); 
					                            if ($sale_text) {
					                                echo '<div class="block prc_block"><div class="row"><div class="price">*</div><p>' . $sale_text .'</p></div></div>';
					                            } else {
					                            }
					                        ?>
					                        <div class="block">
					                        <form class="sidebar-form">
					                          <h2>Заказать звонок</h2>
					                          <!-- Hidden Required Fields -->
					                          <input type="hidden" name="project_name" value="Горный рай">
					                          <input type="hidden" name="admin_email" value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
					                          <input type="hidden" name="form_subject" value="Заявка с сайта">
					                          <!-- END Hidden Required Fields -->
					                           <p>Имя:</p>
					                           <label>
					                             <input type="text" name="Имя" placeholder="Введите ваше имя" required>
					                           </label>
					                           <p>Телефон:</p>
					                           <label>
					                             <input type="text" name="Телефон" placeholder="Введите ваш телефон" required>
					                           </label>
					                          <button class="btn btn-md btn-default">Отправить</button>
					                          <div class="success">Ваша заявка успешно отправлена</div>
					                           <p class="pol_conf">Я даю <a href="https://горный-рай.рф/%d1%81%d0%be%d0%b3%d0%bb%d0%b0%d1%81%d0%b8%d0%b5-%d0%bd%d0%b0-%d0%be%d0%b1%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%ba%d1%83-%d0%bf%d0%b5%d1%80%d1%81%d0%be%d0%bd%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d1%85-%d0%b4/" target="_blank">согласие</a> на обработку персональных данных в соответствии с <a href="https://горный-рай.рф/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" target="_blank">политикой конфиденциальности</a></p>
					                      </form>
					                    </div>
					                    <div class="block">
					                        <?php echo fw_get_db_settings_option('settings_vk'); ?>
					                    </div>
					                </aside>
                        </div>

                        <div class="col-md-12">
														
														<div class="h3">Похоже вы заблудились.</div>
														<div class="h4">Под руководством наших гидов такого бы не произошло.</div>
														<div class="h4">Пока можете ознакомиться с нашими маршрутами</div>
						
														<div class="gridt">
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
                <div class="grid-item grid-item-main">
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

                    <div class="col-xs-5">
                      
                      <p>Длительность:</p>

                    </div>

                    <div class="col-xs-7">
                      <div class="track-days"><?php echo get_post_meta( $post_cot_id, 'days_meta', true ); ?></div>
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

                    <div class="col-xs-5">
                      
                      <?php
                        if ($diff == 1) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d1.jpg' alt=''>";
                        }
                        elseif ($diff == 2) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d2.jpg' alt=''>";
                        }
                        elseif ($diff == 3) {
                          echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d3.jpg' alt=''>";
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
                  
                  <div class="col-xs-6">
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
                  <div class="col-xs-6">
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

            </div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

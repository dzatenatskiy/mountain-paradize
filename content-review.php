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
			
		<div class="col-md-9 block block-main-blog">
            <article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
                <h2 itemprop="name headline"><?php wp_title(); ?></h2>
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
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>

    <div class="col-md-3">
                <aside>
                    <div class="block vertical-service hidden-xs hidden-sm">
                        <div class="row review-aside-heading">
                            <a href="<?php echo esc_url( home_url( '/%D0%BC%D0%B0%D1%80%D1%88%D1%80%D1%83%D1%82%D1%8B/' ) ); ?>">
                            <div class="col-xs-4">
                                <img src="<?php echo get_template_directory_uri() . "/img/tourist.jpg" ?>" alt="">
                            </div>
                            <div class="col-xs-8">
                                <h2><span>ПОДОБРАТЬ ПОХОД</span></h2>
                            </div>
                          </a>
                        </div>
                        <div class="content-slider-wrap">
                            <ul id="content-slider" class="content-slider">
                                <?php
                                    $serv_args = array(
                                        'post_type' => 'service',
                                        'posts_per_page' => -1
                                    );
                                    $serv_loop = new WP_Query($serv_args);?>
                                    <?php
                                    $serv_post_id = array();
                                    if( $serv_loop->have_posts() ):
                                        while( $serv_loop->have_posts() ): $serv_loop->the_post(); 
                                            $srv_post_id = get_the_id();
                                            $srv_post_id1 = strval($srv_post_id);
                                            array_push($serv_post_id, $srv_post_id1);
                                        endwhile;
                                        $serv_side_id = array();
                                        $rand_keys = array_rand($serv_post_id, 3);
                                        foreach ($rand_keys as $key => $value) {
                                            $rand_keys1 = $serv_post_id[$rand_keys[$key]];
                                            array_push($serv_side_id, $rand_keys1);
                                        }
                                    else:
                                        get_template_part('content-none');
                                    endif;
                                    wp_reset_postdata();

                                $args = array( 'post_type' => 'service', 'posts_per_page' => 3, 'order' => 'ASC', 'post__in'=> $serv_side_id);
                                $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php $post_cot_id = get_the_ID(); ?>
                                    <li class="vertical-service-item">
                                    <div class="service-side-wrap">
                                        <a href="<?php echo get_permalink(); ?>"><h3 class="service-side-heading"><?php echo the_title();?></h3></a> 
                                       
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="price"> 
                                                    <?php echo get_post_meta( $post_cot_id, 'sale_meta', true ); ?><i class="fa fa-rub" aria-hidden="true"></i><span>*</span>
                                                </div>
                                                <h3><?php echo get_post_meta( $post_cot_id, 'days_meta', true ); ?></h3>
                                                <h3 class="diff-wrap">Сложность:
                                                    <span class="diff">
                                                    <?php 
                                                        $diff1 = fw_get_db_settings_option('diff_text_1');
                                                        $diff2 = fw_get_db_settings_option('diff_text_2');
                                                        $diff3 = fw_get_db_settings_option('diff_text_3');
                                                    
                                                        $diff = get_post_meta( $post_cot_id, 'diff_meta', true );
                                                        echo $diff;
                                                    ?>
                                                    </span>
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
                                                </h3>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    </li>

                            <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="block hidden-xs hidden-sm">
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
                    <div class="block hidden-xs hidden-sm">
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
                    <div class="block hidden-xs hidden-sm">
                        <?php echo fw_get_db_settings_option('settings_vk'); ?>
                    </div>
                </aside>
        </div>

	</div>
    <div class="row">
            <div class="col-md-9 block social-block">
                <h3>Поделитесь с друзьями в соц сетях:</h3>
                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="//yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,odnoklassniki,twitter,lj"></div>
            </div>
        </div>

					

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kovka
 */

get_header(); ?>

<div class="page-heading-item" style="background-image: url(<?php echo fw_get_db_settings_option('page_image')['url']; ?>);">
    <div class="container">
      <h2 class="page-heading"><?php single_cat_title(); ?></h2>
    </div>
    <div class="breadcrumbs-custom">
        <div class="container">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>
    
</div> 

	<section class="tracks">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
                <aside class="main-aside">
                    <div class="block">
                        <div class="row">
                            <a href="<?php echo esc_url( home_url( '/%D0%BF%D1%83%D1%82%D0%B5%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8C/' ) ); ?>">
                            <div class="col-xs-12">
                                <h2><span>ПУТЕВОДИТЕЛЬ</span></h2>
                            </div>
                          </a>
                        </div>
                            <?php 
                                 $terms = get_terms( 'review_cat' );
                                    if( $terms && ! is_wp_error($terms) ){
                                        foreach( $terms as $term ){
                                            $name_tax = $term->name; 
                                            $id_tax = $term->term_id;
                                            $term_url = get_term_link($id_tax);
                                            ?>
                                            <div>
                                                <a href="<?php echo $term_url; ?>"><h4><?php echo $name_tax ?></h4></a>
                                            </div>
                                    <?php   }
                                    }
                            ?>
                    </div>
                    <div class="block">
                        <div class="row">
                            <a href="<?php echo esc_url( home_url( '/%D0%BC%D0%B0%D1%80%D1%88%D1%80%D1%83%D1%82%D1%8B/' ) ); ?>">
                            <div class="col-xs-4">
                                <img src="<?php echo get_template_directory_uri() . "/img/tourist.jpg" ?>" alt="">
                            </div>
                            <div class="col-xs-8">
                                <h2><span>ПОДОБРАТЬ ПОХОД</span></h2>
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
                    <div class="block">
                        <?php echo fw_get_db_settings_option('settings_vk'); ?>
                    </div>
                    <div class="block instagram_widget">
        <!-- Без профиля -->
        <iframe src='/inwidget/index.php?adaptive=true' scrolling='no' frameborder='no' style='border:none;width:100%;height:330px;overflow:hidden;'></iframe>
      </div>
                </aside>
            </div>
            <div class="col-md-9">
                <h2 class="page-heading page-heading-dark"><?php single_cat_title(); ?></h2>
                <div class="row">
                    <div class="review">
                        <?php
                            $args = array( 'post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC');
                            $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="review-wrap">
                                    <div class="review-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="review-description">
                                        <a href="<?php echo get_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
                 <div class="block block-mobile hidden-md hidden-lg">
                    <div class="row">
                        <div class="price">* </div><p><?php echo fw_get_db_settings_option('sale_text'); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();

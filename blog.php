<?php
/**
 * Template Name: Блог
 *
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>

<style type="text/css">
    .__head {background-image: url(<?php echo fw_get_db_post_option($post->ID)['page_c_image']['url']; ?>);}
    @media (max-width: 480px) {
    .__head {background-image: url(<?php echo fw_get_db_post_option($post->ID)['page_c_image_m']['url']; ?>);}
    }
</style>
<section class="__head">
	<div id="__head">
		<div class="page-heading-item">
			<div class="container">
				<h1 class="page-heading" itemprop="name"><?php echo fw_get_db_post_option($post->ID)['h1_text']; ?></h1>
			</div>
            <div class="breadcrumbs-custom">
				<div class="container">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
				</div>
			</div>

		</div> 
		<div class="arrow_wrap">
            <div class="arrow">
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>
	</div>
</section>
	<section class="tracks">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <h2 class="page-heading page-heading-dark"><span>Отчеты</span><a href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BE%D1%82%D1%87%D0%B5%D1%82%D1%8B/" class="btn btn-main">Посмотреть все отчеты</a></h2>

                <div class="blog-slide">
                  <?php
                    $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'order' => 'ASC');
                    $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="blog-wrap block col-sm-6 col-md-3">
                            <div class="blog-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="blog-description">
                                <h2 itemprop="name headline"><span><?php echo the_title();?></span></h2>
                                <h4><?php echo fw_get_db_post_option($post->ID)['blog_field_1']; ?></h4>
                                <div itemprop="description"><?php echo the_excerpt(); ?></div>
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-default" itemprop="mainEntityOfPage">Подробнее</a>
                            </div>
                        </div>

                  <?php endwhile; ?>                
                </div>

                <h2 class="page-heading page-heading-dark"><span>Статьи</span><a href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BF%D1%83%D1%82%D0%B5%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8C/" class="btn btn-main">ПОСМОТРЕТЬ ВСЕ СТАТЬИ</a></h2>

                <div class="note-wrp">
                  
                  <?php
                    $args = array( 'post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC');
                    $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="review-wrp col-sm-6 col-md-3">
                                    <div class="review-img">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="review-img_hover"></div>
                                    </div>
                                    <div class="review-description">
                                        <a href="<?php echo get_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
                                        <div class="line"></div>
                                        <?php echo kama_excerpt( array('maxchar'=>100) ); ?>
                                        <a href="<?php echo get_permalink(); ?>" class="btn btn-default">Подробнее</a>
                                    </div>
                                </div>

                  <?php endwhile; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer();
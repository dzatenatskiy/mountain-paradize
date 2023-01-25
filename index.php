<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blnk
 */
get_header(); ?>
<style type="text/css">
    .__head {background-image: url(<?php echo fw_get_db_settings_option('page_blog')['url']; ?>);}
    @media (max-width: 480px) {
    .__head {background-image: url(<?php echo fw_get_db_settings_option('page_blog_m')['url']; ?>);}
    }
</style>
	<main>
		<section class="__head">
			<div id="__head">
				<div class="page-heading-item">
					<div class="container">
						<h1 class="page-heading" itemprop="name"><?php 
							echo "ОТЧЕТЫ"; 
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
            <div class="page">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 hidden-xs hidden-sm d-none">
                            <aside>
                                <div class="block">
                        <div class="header_searchform">
                            <?php get_search_form(); ?>
                          </div>
                    </div>
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
                           <div class="ag__info">
                            <p class="__fz_small d-flex"> 
                                <input type="checkbox" value="false" id="customRadio1" class="customRadio1" style="display:none;">
                                <label id="clickforcr1" class="clickforcr1" for="customRadio1">
                                    <span class="svgcall mt-0">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">	
                                            <circle cx="10" cy="10" r="9" fill="white" stroke="#CFCFCF" stroke-width="2"></circle>
                                        </svg>
                                    </span>
                                    Я даю <a href="https://горный-рай.рф/%d1%81%d0%be%d0%b3%d0%bb%d0%b0%d1%81%d0%b8%d0%b5-%d0%bd%d0%b0-%d0%be%d0%b1%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%ba%d1%83-%d0%bf%d0%b5%d1%80%d1%81%d0%be%d0%bd%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d1%85-%d0%b4/" target="_blank">согласие</a> на обработку персональных данных в соответствии с <a href="https://горный-рай.рф/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" target="_blank">политикой конфиденциальности</a>
                                </label>
                            </p>
                            <div id="pnlTest" class="pnlTest">Пожалуйста, отметьте данное поле</div>
                        </div>
                          <button class="btn btn-md btn-default  btnSend" disabled>Отправить</button>
                          <div class="success">Ваша заявка успешно отправлена</div>
                      </form>
                    </div>
                    <div class="block">
                        <?php echo fw_get_db_settings_option('settings_vk'); ?>
                    </div>
                </aside>
                        </div>
                        <div class="col-md-12">

                            <?php
                            if ( have_posts() ) :

                                /* Start the Loop */
                                while ( have_posts() ) : the_post(); ?>

                                   <article itemscope itemtype="https://schema.org/BlogPosting">
                                    <div class="blog-item block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="blog-item-img">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                                <div class="hidden-xs hidden-md hidden-lg"><?php the_post_thumbnail(); ?></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="blog-descr-wrap">
                                                    <div class="blog-descr">
                                                        <h2 itemprop="name headline"><span><?php echo the_title();?></span></h2>
                                                        <h4><?php echo fw_get_db_post_option($post->ID)['blog_field_1']; ?></h4>
                                                        <div itemprop="description"><?php echo the_excerpt(); ?></div>
                                                        <a href="<?php echo get_permalink(); ?>" class="btn btn-default" itemprop="mainEntityOfPage">Подробнее</a>
														<a href="https://горный-рай.рф/%d1%80%d0%b0%d1%81%d0%bf%d0%b8%d1%81%d0%b0%d0%bd%d0%b8%d0%b5-%d0%bf%d0%be%d1%85%d0%be%d0%b4%d0%be%d0%b2/" class="btn btn-default" itemprop="mainEntityOfPage">Посмотреть расписание</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php
                                endwhile;
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif; ?>
                                <?php the_posts_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
<?php
get_footer();
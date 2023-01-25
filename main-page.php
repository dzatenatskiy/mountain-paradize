<?php
/**
 * Template Name: Главная
 *
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */
get_header(); ?>

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
    <div class="mainsler">
        <div class="item item1">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-2">
                        <p class="slider-heading"><?php echo fw_get_db_settings_option('slider_h1_11'); ?>
                            <br><?php echo fw_get_db_settings_option('slider_h1_12'); ?></p>
                    </div>
                </div>
            </div>
            <!--<div class="slider-btn-wrap">
                <a href="#callback" class="btn btn-default btn-lg">ЗАКАЗАТЬ ЗВОНОК</a>
            </div>-->
        </div>
        <!--div class="item item2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="slider-heading slider-heading-custom"><?php echo fw_get_db_settings_option('slider_h1_21'); ?><br><?php echo fw_get_db_settings_option('slider_h1_22'); ?></p>
                </div>
            </div>
        </div>
          <!--  <div class="slider-btn-wrap">
                <a href="#callback" class="btn btn-default btn-lg">ЗАКАЗАТЬ ЗВОНОК</a>
            </div>
    </div>
    <div class="item item3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="slider-heading slider-heading-custom"><?php echo fw_get_db_settings_option('slider_h1_31'); ?><br><?php echo fw_get_db_settings_option('slider_h1_32'); ?></p>
                </div>
            </div>
        </div>
          <!--  <div class="slider-btn-wrap">
                <a href="#callback" class="btn btn-default btn-lg">ЗАКАЗАТЬ ЗВОНОК</a>
            </div>-->
        <div class="arrow_wrap">
            <div class="arrow">
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>
    </div>

    <div class="__sform">
        <!--?php echo do_shortcode( '[searchandfilter fields="service_type,service_cat" submit_label="Хочу в поход"]' ); ?-->


        <section class="tracks" id="genre-filter">
            <div class="container">
                <div class="block">
                    <div class="type-gallery" data-typed="<?php echo get_queried_object()->term_id; ?>"></div>

                    <div class="type-wrp">
                        <?php
                        $terms = get_terms('service_type');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $name_tax = $term->name;
                                $id_tax = $term->term_id;
                                $term_url = get_term_link($id_tax);
                                ?>
                                <div class="type-wrp-slide">
                                    <div>
                                        <a href="<?php echo $term_url; ?>" class="btn_sl" data-typeid="<?php echo $id_tax; ?>">
                                            <?php echo $name_tax ?>
                                        </a>
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                    </div>

                    <div class="cat-gallery" data-catid="<?php echo get_queried_object()->term_id; ?>"></div>

                    <div class="category-wrp">

                        <?php
                        $terms = get_terms('service_cat');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $name_tax = $term->name;
                                $id_tax = $term->term_id;
                                $term_url = get_term_link($id_tax);
                                ?>

                                <div class="category-item-wrap">
                                    <!--img src="<?php echo fw_get_db_term_option($id_tax, 'service_cat', 'icon')["url"]; ?>" alt=""-->
                                    <a href="<?php echo $term_url; ?>" class="btn btn-default __catwrp cat-id-<?php echo $id_tax; ?>">
                                        <?php echo $name_tax ?>
                                    </a>
                                </div>

                            <?php }
                        }
                        ?>

                    </div>

                </div>
            </div>

        </section>
    </div>

    <div class="page">
        <div class="container">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </div><!-- #primary -->
    <section class="tracks">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-heading-main pg-heading-dark"><span>Ближайшие маршруты</span><a
                                href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BC%D0%B0%D1%80%D1%88%D1%80%D1%83%D1%82%D1%8B/"
                                class="btn btn-default btn-main">Посмотреть все маршруты</a></h2>
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
                                                <div class="track-data-wrap"><p>Ближайшая дата:</p>
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

                    <!--h2 class="page-heading page-heading-dark"><span>ОТЧЕТЫ</span><a href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BE%D1%82%D1%87%D0%B5%D1%82%D1%8B/" class="btn btn-default btn-main">ПОСМОТРЕТЬ ВСЕ ОТЧЕТЫ</a></h2>
                <div class="blog-sl">
                  <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => -1, 'order' => 'DES');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="blog-wrap block">
                            <div class="blog-img">
                                <?php the_post_thumbnail(array(263, 148)); ?>
                            </div>
                            <div class="blog-description">
                                <h2 itemprop="name headline"><span><?php echo the_title(); ?></span></h2>
                                <h4><?php echo fw_get_db_post_option($post->ID)['blog_field_1']; ?></h4>
                                <div itemprop="description"><?php echo the_excerpt(); ?></div>
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-default" itemprop="mainEntityOfPage">ПОДРОБНЕЕ</a>
                            </div>
                        </div>

                  <?php endwhile; ?>
                </div-->


                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="block block-main">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo fw_get_db_settings_option('main_image')['url']; ?>" alt="">
                    </div>
                    <div class="col-md-12">
                        <h1><?php echo fw_get_db_settings_option('main_h1'); ?></h1>
                        <?php echo fw_get_db_settings_option('main_text'); ?>
                        <div class="hidden-xs hidden-sm">
                        <div class="__widgvk"><?php echo fw_get_db_settings_option('settings_vk'); ?></div>
                        </div>
                        <div class="hidden-md hidden-lg">
                        <div class="__widgvk"><div id="vk_groupsss"></div><script type="text/javascript">VK.Widgets.Group("vk_groupsss", {mode: 4, width: "auto", height: "500"}, 97620157);</script></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();
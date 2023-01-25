<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mountine-paradise
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});
get_header(); ?>
<?php $cat_id = get_queried_object()->term_id; ?>
    <style type="text/css">
        .__head {
            background-image: url(<?php echo fw_get_db_term_option($cat_id, 'service_type','page_cat' )['url']; ?>);
        }

        @media (max-width: 480px) {
            .__head {
                background-image: url(<?php echo fw_get_db_term_option($cat_id, 'service_type','page_cat_m' )['url']; ?>);
            }
        }
    </style>
    <section class="__head">
        <div id="__head">
            <div class="page-heading-item">
                <div class="container">
                    <h1 class="page-heading"
                        itemprop="name"><?php echo fw_get_db_term_option($cat_id, 'service_type', 'h1_text'); ?></h1>
                </div>
                <div class="breadcrumbs-custom">
                    <div class="container">
                        <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
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
    <section class="tracks" id="genre-filter">
        <div class="container">

            <div class="block service-tax-block">

                <div class="row">
                    <div class="col-md-3">
                        <div class="cat-descr-wrap">

                            <img src="<?php echo fw_get_db_term_option($cat_id, 'service_type', 'image')['url']; ?>"
                                 alt="">

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="cat-descr-wrap">

                            <div class="wrapper">
                                <div class="xpandable-block"><?php echo fw_get_db_term_option($cat_id, 'service_type', 'text'); ?></div>
                                <div class="text-show text-show-1">Показать полностью ...</div>
                                <div class="text-hid">Скрыть текст ...</div>
                                <div class="cat-social">
                                    <h3>Поделитесь с друзьями в соц сетях:</h3>
                                    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                    <script src="//yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2"
                                         data-services="vkontakte,odnoklassniki,twitter,lj"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="block">

                <div class="type-gallery" data-typed="<?php echo get_queried_object()->term_id; ?>"></div>

                <div class="type-wrp type-wrap">
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

                <div class="category-wrp category-wrap">
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

            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm">

                    <aside class="main-aside">
                        <!--div class="block">
<div class="header_searchform">
<?php get_search_form(); ?>
</div>
</div-->
                        <div class="block">
                            <!--div class="row">
<div class="filter-wrap">
<div class="col-xs-4">
<img src="<?php echo get_template_directory_uri() . "/img/tourist.jpg" ?>" alt="">
</div>
<div class="col-xs-8">
<h2><span>ПОДОБРАТЬ <br> ПОХОД</span><i class="fa fa-arrow-down" aria-hidden="true"></i></h2>
</div>
</div>
</div-->
                            <div>
                                <div class="__pr_block">
                                    <h3>Цена похода:</h3>
                                    <div id="sale">
                                        <form method='post'>
                                            <label for='price'>
                                                От:
                                                <input type="text" name="price" id="price" maxlength="10" value="">
                                            </label>
                                            <label for='price2'>
                                                До:
                                                <input type="text" name="price" id="price2" maxlength="10" value="">
                                            </label>
                                        </form>
                                    </div>
                                    <div id="slider_price"></div>
                                    <?php echo get_price_filters(); ?>
                                </div>
                                <h3>Месяц:</h3>
                                <?php echo get_month_filters(); ?>
                                <div class="__dfilt">
                                    <h3>Дней в походе:</h3>
                                    <div class="days-filter">
                                        <?php echo get_days_filters(); ?>
                                    </div>
                                    <div class="__ddiff d-none">
                                        <h3>Сложность:</h3>
                                        <?php echo get_diff_filters(); ?>
                                    </div>
                                </div>
                            </div>
                            <!--div class="block">
<div class="row">
<a href="<?php echo esc_url(home_url('/%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D0%B8/')); ?>">
<div class="col-xs-4">
<img src="<?php echo get_template_directory_uri() . "/img/rukzak.jpg" ?>" alt="">
</div>
<div class="col-xs-8">
<h2><span>ИНСТРУКЦИИ</span></h2>
</div>
</a>
</div>
</div-->
                            <!--div class="block">
<div class="row">
<a href="<?php echo esc_url(home_url('/%D1%80%D0%B0%D1%81%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE%D1%85%D0%BE%D0%B4%D0%BE%D0%B2/')); ?>">
<div class="col-xs-4">
<img src="<?php echo get_template_directory_uri() . "/img/calendar.jpg" ?>" alt="">
</div>
<div class="col-xs-8">
<h2><span>РАСПИСАНИЕ</span></h2>
</div>
</a>
</div>
</div-->
                            <div class="block__sc d-none">
                                <form class="sidebar-form">
                                    <h2>Забронировать место в походе</h2>
                                    <!-- Hidden Required Fields -->
                                    <input type="hidden" name="project_name" value="Горный рай">
                                    <input type="hidden" name="admin_email"
                                           value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
                                    <input type="hidden" name="form_subject" value="Заявка с сайта">
                                    <!-- END Hidden Required Fields -->
                                    <p>Имя:</p>
                                    <label>
                                        <input type="text" name="Имя" placeholder="Введите ваше имя">
                                    </label>
                                    <p>Телефон:</p>
                                    <label>
                                        <input type="text" name="Телефон" placeholder="Введите ваш телефон">
                                    </label>
                                    <p>Выберите поход:</p>
                                    <select custom_select class="form-service-select">
                                        <?php
                                        $args = array('post_type' => 'service', 'posts_per_page' => -1);
                                        $ttl_loop = new WP_Query($args);
                                        while ($ttl_loop->have_posts()): $ttl_loop->the_post(); ?>
                                            <option data-id="<?php echo get_the_ID(); ?>"><?php echo the_title(); ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <div class="form-data">
                                        <?php
                                        $args = array('post_type' => 'service', 'posts_per_page' => 1);
                                        $ttl_loop = new WP_Query($args);
                                        while ($ttl_loop->have_posts()): $ttl_loop->the_post();
                                            $formid = get_the_ID();
                                            $service = get_field('serice', $formid);
                                            if ($service) :
                                                echo "<p>Выберите дату:</p><select name='Дата'>";
                                                foreach ($service as $adv) {
                                                    echo "<option>" . $adv['serice_data'] . "</option>";
                                                }
                                                echo "</select>";
                                            else :
                                            endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                    <button class="btn btn-md btn-default">Отправить</button>
                                    <div class="success">Ваша заявка успешно отправлена</div>
                                    <p class="pol-conf">Отправляя данную форму вы даете согласие на обработку
                                        персональных данных в соответствии с <a
                                                href="https://xn----8sbhycugqd1i.xn--p1ai/%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BA%D0%BE%D0%BD%D1%84%D0%B5%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8/">политикой
                                            конфиденциальности</a></p>
                                </form>

                                <div class="block col-md-3">
                                    <?php echo fw_get_db_settings_option('settings_vk'); ?>
                                </div>
                            </div>
                    </aside>
                </div>
                <div class="col-md-12">
                    <h2 class="page-heading page-heading-dark d-none"><?php
                        add_filter('document_title_parts', function ($parts) {
                            if (isset($parts['site'])) unset($parts['site']);
                            return $parts;
                        });
                        echo wp_get_document_title();
                        ?></h2>

                    <?php
                    $queried_object = get_queried_object();
                    $slag_tax = $queried_object->slug;
                    ?>

                    <div class="typeit" data-type="<?php echo $slag_tax; ?>"></div>

                    <div id="genre-results" class="row grid">
                    </div>

                    <div id="true_loadmore">Загрузить ещё</div>

                </div>
            </div>
        </div>
    </section>

<?php get_footer();

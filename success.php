<?php

$first_time = false;
if (!isset($_COOKIE["название"])) {
    $first_time = true;
    setcookie("название", "любое_слово", time() + 3600*24*10, "/");
    /* помнить десять дней, куки действуют на всех страницах сайта */
}

/**
 * Template Name: Спасибо
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

      <section class="__head __success">

                    <div id="__head __success">
                        <div class="container">
                            <div class="page-heading-item">
                                <h1 class="page-heading">Спасибо за заявку</h1>
                                <div class="breadcrumbs-custom">
                                    <div class="container">
                                        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <div class="page-heading-item page_success">

            <?php while ( have_posts() ) : the_post(); 

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.

             ?>
                
</div>

<?php get_footer();
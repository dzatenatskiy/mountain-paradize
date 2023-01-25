<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blank
 */

get_header(); ?>

<style type="text/css">
    .__head {background-image: url(<?php echo fw_get_db_post_option($post->ID)['service_image']['url']; ?>);}
    @media (max-width: 480px) {
        .__head {background-image: url(<?php 
            $thumb_img = fw_get_db_post_option($post_cot_id)['service_thumb']['url'];
            if ($thumb_img) {
                echo $thumb_img;
            } else {
                the_post_thumbnail_url( 'large' ); 
            }
            ?>);}
    }
</style>

<main itemscope itemtype="http://schema.org/Product">
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
            <div class="arrow_wrap bottom_arrow">
                <div class="arrow">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
		</div>
	</section>
    <div class="page-blog">

            <div class="container">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content-service', get_post_format() );
                    

                endwhile; // End of the loop.
                ?>
            </div>
    </div><!-- #primary -->
</main>
<?php
get_footer();

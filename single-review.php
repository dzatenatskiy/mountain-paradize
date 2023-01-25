<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blank
 */
$post_rev_id = $post_id = get_the_ID();
get_header(); ?>

<style type="text/css">
    .page-heading-item {background-image: url(<?php echo fw_get_db_post_option($post_rev_id)['review_image']['url']; ?>);}
    @media (max-width: 480px) {
        .page-heading-item {background-image: url(<?php 
            $thumb_img = fw_get_db_post_option($post_rev_id)['review_image_m']['url'];
            if ($thumb_img) {
                echo $thumb_img;
            } else {
                the_post_thumbnail_url( 'large' ); 
            }
            ?>);}
    }
</style>

<main itemscope itemtype="http://schema.org/Product">
	<section class="__rev-sect">
	<div class="page-heading-item">
    <div class="container">
            <h1 class="page-heading" itemprop="name"><?php echo fw_get_db_post_option($post_rev_id)['h1_text']?></h1>
    </div>
    <div class="breadcrumbs-custom">
    	<div class="container">
    			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    	</div>
    </div>
	</div>
	</section>
	<div class="page-blog">
			<div class="container">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-review', get_post_format() );
					
				endwhile; // End of the loop.
				?>
			</div>
	</div><!-- #primary -->
</main>
<?php
get_footer();

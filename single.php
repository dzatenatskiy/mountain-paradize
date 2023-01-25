    <?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mountine-paradise
 */

get_header(); ?>

<style type="text/css">
    .page-heading-item {background-image: url(<?php echo fw_get_db_post_option($post->ID)['blog_image']['url']; ?>);}
    @media (max-width: 480px) {
        .page-heading-item {background-image: url(<?php 
            $thumb_img = fw_get_db_post_option($post->ID)['blog_image_m']['url'];
            if ($thumb_img) {
                echo $thumb_img;
            } else {
                the_post_thumbnail_url( 'large' ); 
            }
            ?>);}
    }
</style>

<main itemscope itemtype="https://schema.org/Blog">
	<section class="__blog_sect page-heading-item">
	<div class="blog-heading">
    <div class="container">
        <h1 class="page-heading"><?php echo fw_get_db_post_option($post->ID)['h1_text']; ?></h1>
        <p class="blog-data">
            <?php echo fw_get_db_post_option($post->ID)['blog_field_1']; ?>
        </p>
    </div>
</div>
	</section>

	<div class="page-blog">
			<div class="container">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );
?>
				<div class="block page-blog-block">

					<?php	
					// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
	</div><!-- #primary -->
</main>
<?php
get_sidebar();
get_footer();

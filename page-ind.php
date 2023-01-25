<?php
/**
 * Template Name: Инд.туры
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
<div class="page">
		<div class="container">
<div class="__ind d-flex">
						<?php while(the_repeater_field('__indrep')): ?>

						<div class="__ind-content">

							<div class="__indimg">
								<img src="<?php the_sub_field('__indimg'); ?>">
							</div>
							<div class="__inddesc">                  
								<p><?php the_sub_field('__inddesc'); ?></p>
							</div>

						</div>
						<?php endwhile; ?>               
					</div>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
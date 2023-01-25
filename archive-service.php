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
<style type="text/css">
	.__head {
	background-image: url(<?php echo fw_get_db_settings_option('page_service')['url']; ?>);
	}
	@media (max-width: 480px) {
	.__head {
	background-image: url(<?php echo fw_get_db_settings_option('page_service_m')['url']; ?>);
	}
	}
</style>
<section class="__head">
	<div id="__head">
		<div class="page-heading-item">
			<div class="container">
				<h1 class="page-heading" itemprop="name"><?php
					add_filter('document_title_parts', function ($parts) {
					    if (isset($parts['site'])) unset($parts['site']);
					    return $parts;
					});
					echo wp_get_document_title();
					?></h1>
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
				<div class="category-item-wrap" style="margin: 0 6px">
					<!--img src="<?php //echo fw_get_db_term_option($id_tax, 'service_cat', 'icon')["url"]; ?>" alt=""-->
					<a href="<?php echo $term_url; ?>" class="btn btn-default cat-id-<?php echo $id_tax; ?>">
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
				<aside class="main-aside ms">
					<!--div class="block">
						<div class="header_searchform">
						<?php get_search_form(); ?>
						</div>
						</div-->
					<div class="__difilter block">
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
							<div class="__dfil">
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
					</div>
				</aside>
			</div>
			<div class="col-md-12">
				<h2 class="page-heading page-heading-dark">Маршруты</h2>
				<div class="catit" data-cat="<?php echo $slag_tax; ?>"><?php echo $slag_tax; ?></div>
				<div id="genre-results" class="row grid">
				</div>
				<div id="true_loadmore">Загрузить ещё</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();


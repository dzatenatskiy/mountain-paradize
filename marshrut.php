<?php
/**
 * Template Name: Маршруты
 * Template Post Type: page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package blank
 */
get_header(); ?>

<div class="page-heading-item" style="background-image: url(<?php echo fw_get_db_settings_option('page_image')['url']; ?>);">
	<div class="container">
		<h2 class="page-heading"><?php 
			add_filter('document_title_parts', function( $parts ){
				if( isset($parts['site']) ) unset($parts['site']);
				return $parts;
			});
			echo wp_get_document_title(); 
			?></h2>
	</div>
	<div class="breadcrumbs-custom">
		<div class="container">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
		</div>
	</div>
    
</div> 

<section class="tracks">
	<div class="container">
		<div class="row">
			<div class="col-md-12 hidden-xs hidden-sm">
				<aside class="main-aside">
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
							<h2>Забронировать место в походе</h2>
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
							<button class="btn btn-md btnSend btn-default" disabled>Отправить</button>
							<div class="success">Ваша заявка успешно отправлена</div>
						</form>
					</div>
					<div class="block">
						<?php echo fw_get_db_settings_option('settings_vk'); ?>
					</div>
					<div class="block instagram_widget">
						<!-- Без профиля -->
						<iframe src='/inwidget/index.php?adaptive=true' scrolling='no' frameborder='no' style='border:none;width:100%;height:330px;overflow:hidden;'></iframe>
					</div>
				</aside>
			</div>
			<div class="col-md-12">
				<h2 class="page-heading page-heading-dark">МАРШРУТЫ</h2>
				<div id="genre-results" class="row grid">

				</div>

				<div class="block block-mobile hidden-md hidden-lg">
					<div class="row">
						<div class="price">* </div><p><?php echo fw_get_db_settings_option('sale_text'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="block text-contact">

	<h1><?php echo $atts['heading']; ; ?></h1>
	<div class="line"></div>
	<?php echo $atts['text']; ; ?>

    <form class="popup-form popup-form-footer contactcall zoom-anim-dialog contact" id="contactcall">

                        <h2>Оставить заявку</h2>

                        <div class="row">
                        	
                        	<div class="col-xs-12 col-md-6">
                        		
                        		<!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Горный рай">
                            <input type="hidden" name="admin_email" value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
                            <input type="hidden" name="form_subject" value="Индивидуальные туры">
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
											<div id="pnlTest"  class="pnlTest">Пожалуйста, отметьте данное поле</div>
										</div>

		                        <button class="btn btnSend btn-lg btn-default" disabled>Отправить</button>

                        	</div>
                        	<div class="col-xs-12 col-md-5 col-md-offset-1">
                        		
                        		<img src="<?php echo $atts['image']['url']; ; ?>" class="text-contact-img" alt="">

					                    <a href="tel:<?php echo fw_get_db_settings_option('settings_phone'); ?>" class="contact"><i class="fa fa-phone" aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_phone'); ?></a>
					                    <a href="mailto:<?php echo fw_get_db_settings_option('settings_adress'); ?>" class="contact"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_adress'); ?></a>

				                    <div class="social-text-contact">
				                    
				                      <a class="__vk" href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>" rel="nofollow noopener" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i><!--<img src="<?php // echo fw_get_db_settings_option('icon_vk')['url']; ?>" alt="">--></a>
				                      <!--<a href="<?php echo fw_get_db_settings_option('settings_inst_link'); ?>" rel="nofollow noopener" target="_blank" class="__insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
				                      <a href="https://wa.me/79284724378" rel="nofollow noopener" target="_blank" class="__wh"><i class="fa fa-whatsapp" aria-hidden="true"></i><!--<img src="<?php echo fw_get_db_settings_option('icon_whatsapp')['url']; ?>" alt="">--></a>
				                      <a class="__tg" href="https://t.me/alexmountains" rel="nofollow noopener"
					   target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
				                    </div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-xs-12 col-md-8">
                        		<div class="success">Ваша заявка успешно отправлена</div>
							</div>
                        </div>
                    </form>
</div>
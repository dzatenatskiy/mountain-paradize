<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

							<?php $doc_field = $atts['ras_field']; 
										$i = 1;
										if( $doc_field ) :
										foreach( $doc_field as $doc ) { 
											?>

											<div class="raspis-heading">
												<div class="row">
													<div class="col-md-2 col-xs-12 col-sm-3">
														<?php echo $doc['option_1']; ?></div>
													<div class="col-md-2 col-sm-3 hidden-xs">
														Название
													</div>
													<div class="col-md-2 hidden-xs hidden-sm">
														Места
													</div>
													<div class="col-md-2 hidden-xs hidden-sm">
														Продолжительность
													</div>
													<div class="col-md-2 col-sm-3 hidden-xs">
														Цена
													</div>
													<div class="col-md-2 col-sm-3 hidden-xs">
														Заявка
													</div>
													<div class="col-xs-1 hidden-xs hidden-sm"></div>
												</div>
											</div>

											<div id="<?php echo $i; ?>" class="raspis-wrap">
													<?php 
														$k = 0;
														$option_3 =	$doc['option_2'];
														if( $option_3 ) :
														foreach( $option_3 as $opt ) {?>

															<div class="raspis-body">
																<div class="row">
																	<div class="col-md-2 col-xs-6 col-sm-3 ml">
																		<div class="raspis-date"><?php echo  $opt['option_1']; ?></div>
																		<div class="raspis-seat raspis-line hidden-md hidden-lg">
																			
																			<?php $serice_seat_text_2 = $opt['option_7'];
			                                if( $serice_seat_text_2 ) { ?>
																				<div class='raspis-seat-total __go'><?php echo  $opt['option_7']; ?></div>
			                                  <div class='raspis-block'> 
			                                    Идёт набор группы! <br> 
			                                    Успевайте подать заявку!
			                                  </div>

			                                <?php } elseif( $opt['option_9'] ) { ?>
			                                	<div class="raspis-seat-end"><?php	echo $opt['option_9']; ?></div>
																						
						                            <div class="raspis-block">
					                                  Места кончились <br>
					                                  Подано <div class='raspis-seat-nw'><?php echo  $opt['option_5']; ?></div> <?php echo  $opt['option_8']; ?> <br>
							                            	Всего <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div> мест <br>
							                          </div>

						                          <?php } else { ?>
						                              
						                              <div class="raspis-seat-now"><?php echo  $opt['option_5']; ?></div>
						                              <?php echo ' / '; ?>
						                              <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div>

														<div class="raspis-block">
							                            Подано <div class='raspis-seat-now'><?php echo  $opt['option_5']; ?></div> <?php echo  $opt['option_8']; ?> <br>
							                            Всего <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div> мест <br>
							                            Успевайте подать заявку!
							                          </div>

						                          <?php } ?>

																	</div>
																	</div>
																	<div class="col-md-2 col-xs-5 col-sm-3 first">
																		<?php echo  $opt['option_2'];
																		$option_url = $opt['option_2'];

																		preg_match('~<a(.*?)href="([^"]+)"(.*?)>~', $option_url, $matches);
																		$post_url = $matches['2'];

																		$post_id = url_to_postid( $post_url );

																		?>
																		<div class="hidden"><?php echo $post_id; ?></div>
																	</div>
																	<div class="col-md-2 hidden-xs hidden-sm">
																		<div class="raspis-seat">

					                            <?php $serice_seat_text_2 = $opt['option_7'];
			                                if( $serice_seat_text_2 ) { ?>
																				<div class='raspis-seat-total __go'><?php echo  $opt['option_7']; ?></div>
			                                  <div class='raspis-block'> 
			                                    Идёт набор группы! <br> 
			                                    Успевайте подать заявку!
			                                  </div>

			                                <?php } elseif( $opt['option_9'] ) { ?>
			                                	<div class="raspis-seat-end __stop"><?php	echo $opt['option_9']; ?></div>				
						                            <div class="raspis-block __info">
					                                  Места кончились <br>
					                                  Подано <div class='raspis-seat-nw __stp'><?php echo  $opt['option_5']; ?></div> <?php echo  $opt['option_8']; ?> <br>
							                            	Всего <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div> мест <br>
							                          </div>

						                          <?php } else { ?>
						                              
						                              <div class="raspis-seat-now"><?php echo  $opt['option_5']; ?></div>
						                              <?php echo ' / '?>
						                              <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div>

																				<div class="raspis-block">
							                            Подано<div class='raspis-seat-nw'> <?php echo  $opt['option_5']; ?></div>
							                            <?php echo  $opt['option_8']; ?><br> Всего <div class="raspis-seat-total"><?php echo  $opt['option_6']; ?></div> мест <br>
							                            Успевайте подать заявку!
							                          </div>

						                          <?php } ?>
						                          
																		</div>
																	</div>
																	<div class="col-md-2 hidden-xs hidden-sm">
																		<?php echo  $opt['option_3']; ?>
																	</div>
																	<div class="col-md-2 col-xs-12 col-sm-3 ">
																		<div class="ras_price">
																			<?php echo  $opt['option_4']; ?>
																		</div>
																		
																	</div>
																	<div class="col-md-2 col-xs-12 col-sm-3">
																<a href='#service_aside_table' data-day='<?php echo $opt['option_1']; ?>' data-service='<?php echo $opt['option_2']; ?>' class="btn btn-default">Хочу в поход!</a></div>
																</div>
															</div>
															
															<?php $k++; }
															else :
														endif ;

													?>
											</div>

													<div style="margin-bottom: 75px;"></div>

										<?php 
										$i++;}
										else :
										endif ;
									?>
		
<div class="hidden">
                      <form class="popup-form popup-form-footer service_aside_table zoom-anim-dialog contact" id="service_aside_table">

                        <h2>Заявка на участие в походе</h2>

                        <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Горный рай">
                            <input type="hidden" name="admin_email" value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
                            <input type="hidden" name="form_subject" value="Заявка с сайта">
                            <input class="dateday" type="hidden" name="Дата" value="">
                            <input class="dateservice" type="hidden" name="Маршрут" value="">
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
                        <button class="btn btn-lg btn-default btnSend" disabled>Отправить</button>
                        <div class="success">Ваша заявка успешно отправлена</div>
                    </form>
</div>
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="container">

	<div class="success_wrap">
		<div class="row success_row">
			<div class="col-sm-6 success_img">
                <div>
					<img src="/wp-content/uploads/2021/12/лого-горы-1-1.png" alt="">
                    <div class="block social-block-accent-success">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                               <span>Сайт закрыл и забыл, а в соцсетях рука всегда на пульсе! <br>
                                Подписывайся, чтобы быть в курсе всей движухи.</span>
                            </div>
                            <div class="col-xs-12 col-md-12"> 
                            <div class="flex"> 
                                <div class="">                                
                                    <div class="social-block_item">                                 
                                        <a href="https://vk.com/gorniy_ray" class="hidden-xs hidden-sm" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/vkontakte1.png" alt=""></a>
                                        <a href="https://vk.com/gorniy_ray" class="hidden-md hidden-lg" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/vkontakte1.png" alt=""></a>
                                    </div>
                                </div>
                                <!--<div class="">
                                    <div class="social-block_item">
                                        <a href="https://www.instagram.com/horishkov/" class="hidden-xs hidden-sm" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/instagram1.png" alt=""></a>
                                        <a href="https://www.instagram.com/horishkov/" class="hidden-md hidden-lg" rel="nofollow noopener" target="_blank"><img src="/wp-content/uploads/2017/10/instagram1.png" alt=""></a>
                                    </div>
                                </div>-->
                            </div>
                            </div>
                        </div>
                    </div>
                 </div>
			</div>
			<div class="col-sm-6 success_col">
                 <a href="/" class="onMainPage">На главную</a>
				<h1 class="page-heading" itemprop="name"><?php echo $atts['heading']; ?></h1>
        <p class="success-text"><?php echo $atts['text']; ?></p>
        
        <!--<form class="success_form">

          <h2>Откуда вы о нас узнали?</h2>

          <!-- Hidden Required Fields -->
            <!--  <input type="hidden" name="project_name" value="Горный рай">
              <input type="hidden" name="admin_email" value="<?php //echo fw_get_db_settings_option('settings_adress'); ?>">
              <input type="hidden" name="form_subject" value="Откуда вы о нас узнали">
          <!-- END Hidden Required Fields -->
									
									<!--<div><input type="checkbox" name="vk" id="vk" value="Из сообщества Вконтакте">
                  <label for="vk">Из сообщества Вконтакте </label></div>

                  <div><input type="checkbox" name="sarafan" id="sarafan" value="От друзей и знакомых">
                  <label for="sarafan">От друзей и знакомых </label></div>

                  <div><input type="checkbox" name="instagram" id="instagram" value="Из инстаграма">
                  <label for="instagram">Из инстаграма </label></div>

                  <div><input type="checkbox" name="seo" id="seo" value="Сам нашел в поисковике">
                  <label for="seo">Сам нашел в поисковике </label></div>

                  <div><input type="checkbox" name="youtube" id="youtube" value="Видео на Youtube">
                  <label for="youtube">Видео на Youtube </label></div>

                  <div><input type="checkbox" name="yandex" id="yandex" value="Реклама в Яндекс">
                  <label for="yandex">Реклама в Яндекс </label></div>

                  <div><input type="checkbox" name="google" id="google" value="Реклама в Google">
                  <label for="google">Реклама в Google </label></div>

            <div class="success">Ваш отзыв отправлен</div>

          <button class="btn btn-lg btn-default">Отправить</button>

      </form>-->
      
      <?php echo do_shortcode( '[fluentform id="3"]' );?>
			</div>
		</div>
	</div>
        
</div>
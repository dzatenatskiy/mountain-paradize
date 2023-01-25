<?php
/**
 * Template Name: Контакты
 *
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>

<section class="about about-contact" style="background-image: url(<?php echo fw_get_db_settings_option('about_image')['url']; ?>);" itemscope itemtype="http://schema.org/Person">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row contact-info contact-info-about">
                    <div class="col-md-6">
                        <div class="row contact-info-row-about">
                            <div class="col-xs-2 contact-left-col">
                                <i class="fa fa-phone" aria-hidden="true"></i><br>
                            </div>
                            <div class="col-xs-10">
                                <a href="tel:<?php echo fw_get_db_settings_option('settings_phone'); ?>" rel="nofollow noopener" itemprop="telephone"><?php echo fw_get_db_settings_option('settings_phone'); ?></a><br>
                            </div>
                        </div>
                        <div class="row contact-info-row-about">
                            <div class="col-xs-2 contact-left-col">
                                <i class="fa fa-envelope" aria-hidden="true"></i><br>
                            </div>
                            <div class="col-xs-10">
                                <a href="mailto:<?php echo fw_get_db_settings_option('settings_adress'); ?>" rel="nofollow noopener" target="_blank" itemprop="email"><?php echo fw_get_db_settings_option('settings_adress'); ?></a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row contact-info-row-about">
                            <div class="col-xs-2 contact-left-col">
                                <img src="<?php echo fw_get_db_settings_option('icon_vk')['url']; ?>" alt="">
                            </div>
                            <div class="col-xs-10">
                                <a href="<?php echo fw_get_db_settings_option('settings_autor_vk_link'); ?>" rel="nofollow noopener" target="_blank" itemprop="name"><?php echo fw_get_db_settings_option('settings_autor_vk_text'); ?></a><br>
                            </div>
                        </div>
                        <div class="row contact-info-row-about">
                            <div class="col-xs-2 contact-left-col">
                                <img src="<?php echo fw_get_db_settings_option('icon_vk')['url']; ?>" alt="">
                            </div>
                            <div class="col-xs-10">
                                <a href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>" rel="nofollow noopener" target="_blank" itemprop="sameAs"><?php echo fw_get_db_settings_option('settings_vk_text'); ?></a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row contact-info-row-about">
                            <div class="col-xs-2 col-md-1 contact-left-col">
                                <img src="<?php echo fw_get_db_settings_option('icon_ins')['url']; ?>" alt="">
                            </div>
                            <div class="col-xs-10 col-md-11">
                                <a href="<?php echo fw_get_db_settings_option('settings_inst_link'); ?>" rel="nofollow noopener" target="_blank" itemprop="sameAs"><?php echo fw_get_db_settings_option('settings_inst_text'); ?></a><br>
                            </div>
                        </div> 
                    </div>
                </div>
                    <h2 class="page-heading">ОБО МНЕ</h2>
                    <div itemprop="description"><?php echo fw_get_db_settings_option('about_text'); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="friends">
    <div class="container">
        <a href="https://www.gornyvozduh01.ru"><h2 class="parthner-heading">Наши друзья и партнеры гостиница "Горный Воздух" (Адыгея, пос.Гузерипль) </h2></a>
        <div class="row contact-grid">
            <div class="col-md-4 contact-grid-item">
                <img src="<?php echo fw_get_db_settings_option('friends_photo_1')['url']; ?>" alt="">
            </div>
            <div class="col-md-4 contact-grid-item">
                <img src="<?php echo fw_get_db_settings_option('friends_photo_2')['url']; ?>" alt="">
            </div>
            <div class="col-md-4 contact-grid-item">
                <img src="<?php echo fw_get_db_settings_option('friends_photo_3')['url']; ?>" alt="">
            </div>
             <div class="col-md-4 contact-grid-item">
                <img src="<?php echo fw_get_db_settings_option('friends_photo_4')['url']; ?>" alt="">
            </div>
            <div class="col-md-4 contact-grid-item">
                <img src="<?php echo fw_get_db_settings_option('friends_photo_5')['url']; ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="contact contact-about">
    <div class="container">
        <div class="row">
             <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <form class="popup-form callback zoom-anim-dialog">

                        <h2>Заказать обратный звонок</h2>

                        <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Горный рай">
                            <input type="hidden" name="admin_email" value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
                            <input type="hidden" name="form_subject" value="Заявка с сайта">
                        <!-- END Hidden Required Fields -->
                        <div class="row">
                            <div class="col-md-12">
                                <p>Имя:</p>
                                <label>
                                    <input type="text" name="Имя" placeholder="Введите ваше имя">
                                </label>
                            </div>
                    </div>
                            <div class="col-md-12">
                                <p>Телефон:</p>
                                <label>
                                    <input type="text" name="Телефон" placeholder="Введите ваш телефон">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>Сообщение:</p>
                                <textarea type="text" name="Сообщение" rows="7" placeholder="Введите ваше сообщение"></textarea>
                            </div>
                        </div>
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
                            <div id="pnlTest">Пожалуйста, отметьте данное поле</div>
                        </div>
                        <button class="btn btn-lg btnSend btn-default" disabled>Отправить</button>
                        <div class="success">Ваша заявка успешно отправлена</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();

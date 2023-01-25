<?php
   /**
    * Template Name: Инструкции
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
<section class="instructuin">
   <div class="container">
      <div class="row">
         <ul class="tabs tabs-instructuin hidden-xs hidden-sm">
            <?php $args = array( 'post_type' => 'instruction', 'order' => 'ASC',);
               $loop = new WP_Query( $args );?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="tab-link" data-tab="<?php echo get_the_ID(); ?>"><?php echo the_title();?></li>
            <?php endwhile;?>
         </ul>
      </div>
      <div class="hidden-xs hidden-sm">
         <?php $args = array( 'post_type' => 'instruction', 'order' => 'ASC',);
            $loop = new WP_Query( $args );?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <div id="<?php echo get_the_ID(); ?>" class="tab-container">
            <div class="row">
               <div class="col-md-3">
                  <div class="block">
                     <?php the_post_thumbnail(); ?>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="block instruction-content">
                     <?php echo the_content(); ?>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile;?>
      </div>
      <div class="tabs-instructuin tabs-instructuin-m block hidden-md hidden-lg">
         <?php $args = array( 'post_type' => 'instruction', 'order' => 'ASC',);
            $loop = new WP_Query( $args );?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <div class="tab-link d<?php echo get_the_ID(); ?>">
            <span><i class="fa fa-chevron-up"></i><i class="fa fa-chevron-down"></i><?php echo the_title();?></span>
            <div id="<?php echo get_the_ID(); ?>" class="tab-container">
               <?php the_post_thumbnail(); ?>
               <?php echo the_content(); ?>
            </div>
         </div>
         <?php endwhile;?>
      </div>
   </div>
</section>
<section class="contact contact_instruction_form">
   <div class="container">
      <div class="row">
         <h1>Контакты</h1>
         <div class="col-md-6">
            <div class="row">
               <form class="popup-form callback zoom-anim-dialog" id="callback">
                  <h2>Заказать обратный звонок</h2>
                  <!-- Hidden Required Fields -->
                  <input type="hidden" name="project_name" value="Горный рай">
                  <input type="hidden" name="admin_email" value="h<?php echo fw_get_db_settings_option('settings_adress'); ?>">
                  <input type="hidden" name="form_subject" value="Заявка с сайта">
                  <!-- END Hidden Required Fields -->
                  <div class="row">
                     <div class="col-md-12">
                        <p>Имя:</p>
                        <label>
                        <input type="text" name="Имя" placeholder="Введите ваше имя" required>
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p>Телефон:</p>
                        <label>
                        <input id="tel" type="text" name="Телефон" placeholder="Введите ваш телефон" required>
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
                     <div id="pnlTest" class="pnlTest">Пожалуйста, отметьте данное поле</div>
                  </div>
                  <button class="btn btn-lg btn-default  btnSend" disabled> Отправить </button>
                  <div class="__sub field">
                     <div class="success">Ваша заявка успешно отправлена</div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-6">
            <div class="contact-info">
               <div class="row contact-info-row">
                  <div class="col-xs-2 contact-left-col">
                     <img src="https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/04/phone.png"><br>
                  </div>
                  <div class="col-xs-10">
                     <a href="tel:<?php echo fw_get_db_settings_option('settings_phone'); ?>" rel="nofollow noopener"><?php echo fw_get_db_settings_option('settings_phone'); ?></a><br>
                  </div>
               </div>
               <div class="row contact-info-row">
                  <div class="col-xs-2 contact-left-col">
                     <img src="<?php echo fw_get_db_settings_option('icon_whatsapp')['url']; ?>" alt="">
                  </div>
                  <div class="col-xs-10">
                     <a href="https://wa.me/79284724378" rel="nofollow noopener" target="_blank">
                        +7 (928) 472 - 43-78 WhatsApp<br>
                  </div>
               </div>
               <div class="row contact-info-row">
               <div class="col-xs-2 contact-left-col">
               <img src="//xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/04/envelope.png"><br>
               </div>
               <div class="col-xs-10">
               <a href="mailto:<?php echo fw_get_db_settings_option('settings_adress'); ?>" rel="nofollow noopener" target="_blank"><?php echo fw_get_db_settings_option('settings_adress'); ?></a><br>
               </div>
               </div>
               <div class="row contact-info-row">
                  <div class="col-xs-2 contact-left-col">
                     <img src="https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2021/02/telegram.svg" alt="">
                  </div>
                  <div class="col-xs-10">
                     <a href="https://t.me/alexmountains" rel="nofollow noopener" target="_blank">Александ Хоришков</a><br>
                  </div>
               </div>
               <div class="row contact-info-row">
                  <div class="col-xs-2 contact-left-col">
                     <img src="<?php echo fw_get_db_settings_option('icon_vk')['url']; ?>" alt="">
                  </div>
                  <div class="col-xs-10">
                     <a href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>" rel="nofollow noopener" target="_blank"><?php echo fw_get_db_settings_option('settings_vk_text'); ?></a><br>
                  </div>
               </div>
               <!--<div class="row contact-info-row">
                  <div class="col-xs-2 contact-left-col">
                      <img src="<?php echo fw_get_db_settings_option('icon_ins')['url']; ?>" alt="">
                  </div>
                  <div class="col-xs-10">
                      <a href="<?php echo fw_get_db_settings_option('settings_inst_link'); ?>" rel="nofollow noopener" target="_blank"><?php echo fw_get_db_settings_option('settings_inst_text'); ?></a><br>
                  </div>
                  </div>-->        
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();


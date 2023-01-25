<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="contact contact-about contact-bottom-form">

    <div class="row">
        
        <div class="col-md-6">

            <div class="block contact-block">
    
                <?php echo $atts['text_field_2']; ; ?>
                
            </div>
            
        </div>

        <div class="col-md-6">
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
                <div class="row">
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
                            <div id="pnlTest"  class="pnlTest">Пожалуйста, отметьте данное поле</div>
                        </div>
                <button class="btn btn-lg btn-default btnSend" disabled> Отправить</button>
                <div class="success">Ваша заявка успешно отправлена</div>
            </form>
        </div>

    </div>

</div>
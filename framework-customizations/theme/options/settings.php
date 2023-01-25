<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    array(
        'type'    => 'group',
        'options' => array(
                            array(
                            'type'    => 'tab',
                            'options' => array(
                                'logo_image'   => array(
                                       'type'  => 'upload',
                                       'label' => __( 'Логотип', 'fw' ),
                                       'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                   ),
                                'main_image'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Главной', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'friends_photo_1'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Партнеров', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'friends_photo_2'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Партнеров', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'friends_photo_3'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Партнеров', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'friends_photo_4'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Партнеров', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'friends_photo_5'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Партнеров', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'footer_image'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Footer', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                            ),
                            'title' => __('Изображения', '{domain}'),
                            ),
                            array(
                            'type'    => 'tab',
                            'options' => array(
                                'settings_phone' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Телефон', '{domain}'),
                                ),
                                'settings_adress' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Email', '{domain}'),
                                ),
                                'settings_vk_text' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Текст ссылки ВК', '{domain}'),
                                ),
                                'settings_vk_link' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на группу', '{domain}'),
                                ),
                                'settings_vk_link_m' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на группу M', '{domain}'),
                                ),
                                'settings_autor_vk_text' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Текст ссылки на Автора ВК', '{domain}'),
                                ),
                                'settings_autor_vk_link' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на Автора', '{domain}'),
                                ),
                                'settings_autor_vk_link_m' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на Автора M', '{domain}'),
                                ),
                                /*'settings_inst_text' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Текст ссылки на инстаграм', '{domain}'),
                                ),*/
                                'settings_ok_link' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на однокласники', '{domain}'),
                                ),
                                /*'settings_inst_link' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на инстаграм', '{domain}'),
                                ),*/
                                /* 'settings_inst_link_m' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на инстаграм M', '{domain}'),
                                ),*/
                                'settings_vk' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Виджет ВК', '{domain}'),
                                ),
                               
                                'icon_vk'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение ВК', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                /*'icon_ins'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение инстаграм', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),*/
                                'icon_whatsapp'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение WhastApp', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'testimonials_vk_link' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Ссылка на обсуждение в ВК', '{domain}'),
                                ),
                                'testimonials_vk_text' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Текст ссылки на обсуждение в ВК', '{domain}'),
                                ),
                                'review_aside_text' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('Текст походов в статьях', '{domain}'),
                                ),
                                'review_marshrut' => array(
                                    'type'  => 'text',
                                    'value' => '',
                                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                    'label' => __('ID походов в статьях', '{domain}'),
                                ),
                            ),
                            'title' => __('Контакты', '{domain}'),
                            ),
                            array(
                            'type'    => 'tab',
                            'options' => array(
                                'about_text'   => array(
                                       'type'  => 'wp-editor',
                                       'label' => __( 'Обо мне', 'fw' ),
                                       'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
                                       'size' => 'large', // small, large
                                       'editor_height' => 300
                                   ),
                                'main_h1'   => array(
                                       'type'  => 'text',
                                       'label' => __( 'Заголовок Главной', 'fw' ),
                                       'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
                                   ),
                                'main_text'   => array(
                                       'type'  => 'wp-editor',
                                       'label' => __( 'Текст Главной', 'fw' ),
                                       'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
                                       'size' => 'large', // small, large
                                       'editor_height' => 300
                                   ),
                                'sale_text' => array(
                                        'type'  => 'wp-editor',
                                        'value' => '',
                                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                        'label' => __('Срок действия акции', '{domain}'),
                                        'help'  => __('Help tip', '{domain}'),
                                ),
                                'attention_header' => array(
                                        'type'  => 'wp-editor',
                                        'value' => '',
                                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                        'label' => __('Внимание header', '{domain}'),
                                        'help'  => __('Help tip', '{domain}'),
                                ),
                                'attention_link' => array(
                                        'type'  => 'text',
                                        'value' => '',
                                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                        'label' => __('Внимание ссылка', '{domain}'),
                                        'help'  => __('Help tip', '{domain}'),
                                ),
                            ),
                            'title' => __('Тексты', '{domain}'),
                            ),
                            array(
                            'type'    => 'tab',
                            'options' => array(
                                'diff_text_1'   => array(
                                       'type'  => 'wp-editor',
                                       'label' => __( 'Сложность 1', 'fw' ),
                                       'size' => 'large', // small, large
                                       'editor_height' => 100
                                   ),
                                'diff_text_2'   => array(
                                       'type'  => 'wp-editor',
                                       'label' => __( 'Сложность 2', 'fw' ),
                                       'size' => 'large', // small, large
                                       'editor_height' => 100
                                   ),
                                'diff_text_3' => array(
                                        'type'  => 'wp-editor',
                                        'label' => __('Сложность 3', '{domain}'),
                                        'size' => 'large', // small, large
                                       'editor_height' => 100
                                )
                            ),
                            'title' => __('Сложность', '{domain}'),
                            ),
                            array(
                            'type'    => 'tab',
                            'options' => array(
                                'page_image'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение страниц', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_blog'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение блога', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_blog_m'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение блога mobile', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_service'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение маршрутов', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_service_m'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение маршрутов mobile', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_review'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение статей', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'page_review_m'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение статей mobile', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'about_image'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Обо мне', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                                'contact_image'  => array(
                                      'type'  => 'upload',
                                      'label' => __( 'Изображение Контакты', 'fw' ),
                                      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                                  ),
                            ),
                            'title' => __('Изображения страниц', '{domain}'),
                            ),
       ),
   ),
    array(
        'type'    => 'tab',
        'options' => array(
                 'slider_image_1'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                 'slider_image_1_m'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                'slider_h1_11' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h1_12' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h3_11' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_h3_12' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_p_11' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_p_12' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_link_1' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Ссылка слайдера', '{domain}'),
                ),
       ),
        'title' => __('Слайдер 1', '{domain}'),
   ),
    array(
        'type'    => 'tab',
        'options' => array(
                 'slider_image_2'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                  'slider_image_2_m'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                'slider_h1_21' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h1_22' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h3_21' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_h3_22' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_p_21' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_p_22' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_link_2' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Ссылка слайдера', '{domain}'),
                ),
       ),
        'title' => __('Слайдер 2', '{domain}'),
   ),
    array(
        'type'    => 'tab',
        'options' => array(
                 'slider_image_3'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                  'slider_image_3_m'            => array(
                    'type'  => 'upload',
                    'label' => __( 'Изображение слайдера', 'fw' ),
                    'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
                ),
                'slider_h1_31' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h1_32' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Первый заголовок слайдера', '{domain}'),
                ),
                'slider_h3_31' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_h3_32' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Второй заголовок слайдера', '{domain}'),
                ),
                'slider_p_31' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_p_32' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Текст слайдера', '{domain}'),
                ),
                'slider_link_3' => array(
                    'type'  => 'text',
                    'value' => '',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Ссылка слайдера', '{domain}'),
                ),
       ),
        'title' => __('Слайдер 3', '{domain}'),
   )
);


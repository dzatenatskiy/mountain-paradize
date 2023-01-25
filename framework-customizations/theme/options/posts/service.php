<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
	'h1_text' => array(
       'type'  => 'text',
       'value' => '',
       'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
       'label' => __('Заголовок H1', '{domain}'),
   ),
	'service_image' => array(
         'type'  => 'upload',
         'label' => __( 'Изображение слайдера', 'fw' ),
         'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
     ),
	'service_thumb' => array(
         'type'  => 'upload',
         'label' => __( 'Изображение thumbnail', 'fw' ),
         'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
     ),
	'attention_aside' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Текст внимание:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 200
	),
	'service_field' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Верхнее описание:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	),
	'service_field_1' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Описание:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	),
	'service_field_2' => array(
			'type'  => 'wp-editor',
			'tinymce' => 'true',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Информация:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	),
	'service_field_3' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Блок над таблицей цены:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	),
	'service_field_4' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Блок под таблицей цены:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	),
	'service_field_5' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Зимнее описание:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
			'size' => 'large', // small, large
    	'editor_height' => 400
	)
);
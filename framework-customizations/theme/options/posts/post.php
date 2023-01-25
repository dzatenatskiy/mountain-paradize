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
	'blog_image' => array(
         'type'  => 'upload',
         'label' => __( 'Изображение слайдера', 'fw' ),
         'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
     ),
	'blog_image_m' => array(
         'type'  => 'upload',
         'label' => __( 'Изображение thumbnail', 'fw' ),
         'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
     ),
	'blog_link' => array(
			'type'  => 'wp-editor',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Ссылка на автора:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
	),
	'blog_field_1' => array(
			'type'  => 'text',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Дата:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
	),
	'blog_field_2' => array(
			'type'  => 'text',
			'value' => '',
			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			'label' => __('Ссылка вк:', '{domain}'),
			'help'  => __('Help tip', '{domain}'),
	)
);
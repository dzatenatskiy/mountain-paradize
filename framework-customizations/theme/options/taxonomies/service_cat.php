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
  'page_cat' => array(
      'type'  => 'upload',
      'label' => __( 'Изображение слайдера', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
  'page_cat_m' => array(
      'type'  => 'upload',
      'label' => __( 'Изображение мобильных', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
  'image' => array(
      'type'  => 'upload',
      'label' => __( 'Изображение', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
  'icon' => array(
      'type'  => 'upload',
      'label' => __( 'Иконка', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
	'text' => array(
       'type'  => 'wp-editor',
       'value' => '',
       'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
       'label' => __('Описание', '{domain}'),
   )
);
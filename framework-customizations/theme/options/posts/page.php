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
	'page_c_image' => array(
      'type'  => 'upload',
      'label' => __( 'Изображение слайдера', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
	'page_c_image_m' => array(
         'type'  => 'upload',
         'label' => __( 'Изображение thumbnail', 'fw' ),
         'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
     )
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'about_heading' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Заголовок', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	),
    'about_text' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('Текст отзыва', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
      'size' => 'large', // small, large
      'editor_height' => 400
	),
    'about_link_text' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Имя', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	),
    'about_link' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Ссылка', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	),
  'about_image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)
);
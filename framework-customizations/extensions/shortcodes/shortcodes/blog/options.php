<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'blg_heading' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('текст заголовка 1', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'blg_text' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('Цена', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'blg_date' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('Дата 1', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'blg_link' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Ссылка на маршрут', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'blg_image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)
);
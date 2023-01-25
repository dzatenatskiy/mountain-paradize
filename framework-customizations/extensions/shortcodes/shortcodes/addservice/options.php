<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
   'mr_heading' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('текст заголовка 1', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'mr_price' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Цена', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'mr_date' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('Дата 1', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'mr_link' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Ссылка на маршрут', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
   'mr_image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)
);
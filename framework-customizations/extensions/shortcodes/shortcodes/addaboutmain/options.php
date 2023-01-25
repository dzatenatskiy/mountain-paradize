<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'about_text' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'label' => __('Label', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
    'about_link' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Label', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
  'about_image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)
);
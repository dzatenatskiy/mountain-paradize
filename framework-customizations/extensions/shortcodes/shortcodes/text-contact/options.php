<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'heading' => array(
        'type'  => 'text',
        'value' => 'default value',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Текст', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
	'text' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Текст', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
    'image'            => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
);
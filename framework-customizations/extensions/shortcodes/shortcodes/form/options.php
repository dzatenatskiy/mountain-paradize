<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'text_field_2' => array(
	    'type'  => 'wp-editor',
	    'value' => 'default value',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Текст', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	)
);
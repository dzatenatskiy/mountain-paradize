<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'service_link' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Текст', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	)
);
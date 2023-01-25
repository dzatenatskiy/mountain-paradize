<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'text_field_1' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'label' => __('Заголовок', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	)
);
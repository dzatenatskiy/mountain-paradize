<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
   'heading' => array(
        'type'  => 'text',
        'value' => 'default value',
        'label' => __('Заголовок', '{domain}'),
    ),
    'text' => array(
        'type'  => 'wp-editor',
        'value' => 'default value',
        'label' => __('Текст', '{domain}'),
    ),
    'image' => array(
        'type'  => 'upload',
        'value' => 'default value',
        'label' => __('Картинка', '{domain}'),
    ),
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	  'ras_field' => array(
	    'type'  => 'addable-box',
        'value' => array(
            array(
                'option_1' => 'value 1',
                'option_2' => 'value 2',
            ),
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'box-options' => array(
            'option_1' => array( 'type' => 'text' ),
            'option_2' => array( 
                    'type'  => 'addable-box',
                    'value' => array(
                        array(
                            'option_1' => 'value 1',
                            'option_2' => 'value 2',
                            'option_3' => 'value 3',
                            'option_4' => 'value 4',
                            'option_5' => 'value 5',
                            'option_6' => 'value 6',
                            'option_7' => 'value 7',
                            'option_8' => 'value 8',
                            'option_9' => 'value 9',
                        ),
                    ),
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Label', '{domain}'),
                    'desc'  => __('Description', '{domain}'),
                    'help'  => __('Help tip', '{domain}'),
                    'box-options' => array(
                        'option_1' => array( 'type' => 'text', 'label' => __('Дата', '{domain}') ),
								        'option_2' => array( 'type' => 'wp-editor', 'label' => __('Текст', '{domain}') ),
								        'option_3' => array( 'type' => 'text', 'label' => __('Продолжительность', '{domain}') ),
                                        'option_4' => array( 'type' => 'text', 'label' => __('Цена', '{domain}') ),
                                        'option_5' => array( 'type' => 'text', 'label' => __('Мест занято', '{domain}') ),
                                        'option_6' => array( 'type' => 'text', 'label' => __('Мест всего', '{domain}') ),
                                        'option_7' => array( 'type' => 'text', 'label' => __('Мест Текст', '{domain}') ),
                                        'option_8' => array( 'type' => 'text', 'label' => __('Текст заявки', '{domain}') ),
								        'option_9' => array( 'type' => 'text', 'label' => __('есть места', '{domain}') ),
                    ),
                    'template' => '{{- option_1 }}', // box title
                    'box-controls' => array( // buttons next to (x) remove box button
                        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                    ),
                    'limit' => 0, // limit the number of boxes that can be added
                    'add-button-text' => __('Add', '{domain}'),
                    'sortable' => true,
            )
        ),
        'template' => '{{- option_1 }}', // box title
        'box-controls' => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
		)
);
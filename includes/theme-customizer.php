<?php

function mj_customize_register($wp_customize) {


// Settings
    $wp_customize->add_setting('mj_header_first_text', [
        'default' => '',
    ]);
    $wp_customize->add_setting('mj_header_second_text', [
        'default' => '',
    ]);


// Sections
    $wp_customize->add_section('mj_header_section', [
        'title' => __('Header Section', 'enercorp'),
        'priority' => 30,
    ]);

    // Controls
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mj_header_input_1',
            array(
                'label' => __('Local Telephone Number', 'enercorp'),
                'section' => 'mj_header_section',
                'settings' => 'mj_header_first_text',
                'type' => 'text',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mj_header_input_2',
            array(
                'label' => __('Toll Free Number', 'enercorp'),
                'section' => 'mj_header_section',
                'settings' => 'mj_header_second_text',
                'type' => 'text',
            )
        )
    );

}
?>
<?php
	$wp_customize->add_setting('title_disable', array(
        'default'           => 'enable',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'th_blank_sanitize_checkbox',
    ));
$wp_customize->add_control('title_disable', array(
        'label'    => __('Display Site Title', 'jot-shop'),
        'section'  => 'title_tagline',
        'settings' => 'title_disable',
         'type'       => 'checkbox',
        'choices'    => array(
            'enable' => 'Display Site Title',
        ),
    ));
$wp_customize->add_setting('tagline_disable', array(
        'default'           => 'enable',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'th_blank_sanitize_checkbox',
    ));
$wp_customize->add_control('tagline_disable', array(
        'label'    => __('Display Tagline', 'jot-shop'),
        'section'  => 'title_tagline',
        'settings' => 'tagline_disable',
         'type'       => 'checkbox',
        'choices'    => array(
            'enable' => 'Display Tagline',
        ),
    )); 
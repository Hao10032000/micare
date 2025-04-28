<?php 
//Header Style
$wp_customize->add_setting(
    'style_header',
    array(
        'default'           => themesflat_customize_default('style_header'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_RadioImages($wp_customize,
    'style_header',
    array (
        'type'      => 'radio-images',           
        'section'   => 'section_options',
        'priority'  => 1,
        'label'         => esc_html__('Header Style', 'micare'),
        'choices'   => array (
            'header-default' => array (
                'tooltip'   => esc_html__( 'Header Default','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-default.jpg'
            ),
            'header-01' => array (
                'tooltip'   => esc_html__( 'Header 01','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-01.jpg'
            ),
            'header-02' => array (
                'tooltip'   => esc_html__( 'Header 02','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-02.jpg'
            ),
            'header-03' => array (
                'tooltip'   => esc_html__( 'Header 03','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-03.jpg'
            ),
            'header-04' => array (
                'tooltip'   => esc_html__( 'Header 04','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-04.jpg'
            ),
            'header-05' => array (
                'tooltip'   => esc_html__( 'Header 05','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-05.jpg'
            ),
            'header-06' => array (
                'tooltip'   => esc_html__( 'Header 06','micare' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/header-06.jpg'
            ),
        ),
    ))
); 

// Enable Header Absolute
$wp_customize->add_setting(
  'header_absolute',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_absolute'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_absolute',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Absolute ( OFF | ON )', 'micare'),
        'section' => 'section_options',
        'priority' => 2,
    ))
);

// Enable Header Sticky
$wp_customize->add_setting(
  'header_sticky',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_sticky'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_sticky',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Sticky ( OFF | ON )', 'micare'),
        'section' => 'section_options',
        'priority' => 3,
    ))
);    

// Show search 
$wp_customize->add_setting(
  'header_search_box',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_search_box'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_search_box',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Search Box ( OFF | ON )', 'micare'),
        'section' => 'section_options',
        'priority' => 4,
    ))
);

// Show search 
$wp_customize->add_setting(
  'header_sidebar_toggler',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_sidebar_toggler'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_sidebar_toggler',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Sidebar Toggler ( OFF | ON )', 'micare'),
        'section' => 'section_options',
        'priority' => 5,
    ))
);

  // Social Header
$wp_customize->add_setting(
    'social_header',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('social_header'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'social_header',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Social ( OFF | ON )', 'micare'),
          'section' => 'section_options',
          'priority' => 7,
          'active_callback' => function () use ( $wp_customize ) {
            return 'header-02' == $wp_customize->get_setting( 'style_header' )->value();
          } 
      ))
  );


// button
$wp_customize->add_control( new themesflat_Info( $wp_customize, 'header_button_label', array(
    'label'    => esc_html__( 'Button', 'micare' ),
    'section'  => 'section_options',
    'settings' => 'themesflat_options[info]',
    'priority' => 17,
    'active_callback' => function () use ( $wp_customize ) {
        return 1 === $wp_customize->get_setting( 'header_button' )->value();
    }, 
) )
);

$wp_customize->add_setting(
    'header_button',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('header_button'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'header_button',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Header Button ( OFF | ON )', 'micare'),
          'section' => 'section_options',
          'priority' => 18,
      ))
  );


// Button Text
$wp_customize->add_setting(
    'header_button_text',
    array(
        'default' => themesflat_customize_default('header_button_text'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'header_button_text',
    array(
        'label' => esc_html__( 'Text', 'micare' ),
          'section' => 'section_options',
        'type' => 'text',
        'priority' => 19
    )
);
// Button Url
$wp_customize->add_setting(
    'header_button_url',
    array(
        'default' => themesflat_customize_default('header_button_url'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'header_button_url',
    array(
        'label' => esc_html__( 'Url', 'micare' ),
          'section' => 'section_options',
        'type' => 'text',
        'priority' => 20
    )
);



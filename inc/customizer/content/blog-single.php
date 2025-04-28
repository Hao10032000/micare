<?php 
// Customize Blog Featured Title
$wp_customize->add_setting (
    'blog_featured_title',
    array(
        'default' => themesflat_customize_default('blog_featured_title'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'blog_featured_title',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Customize Blog Featured Title', 'micare'),
        'section'   => 'section_content_blog_single',
        'priority'  => 1
    )
);   

$wp_customize->add_setting(
    'style_blog_single',
    array(
        'default'           => themesflat_customize_default('style_blog_single'),
        'sanitize_callback' => 'esc_attr',
    )
);

$wp_customize->add_control( 
    'style_blog_single',
    array (
        'type'      => 'select',           
        'section'   => 'section_content_blog_single',
        'priority'  => 1,
        'label'         => esc_html__('Blog Single Style', 'micare'),
        'choices'   => array (
            'content-single'     => esc_html__( 'Default','micare' ),
            'content-single2'      =>  esc_html__( 'fullwidth','micare' ),
        ),
    )
);

// Show Post Navigator
$wp_customize->add_setting (
    'show_post_navigator',
    array (
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_post_navigator'),     
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'show_post_navigator',
    array(
        'type'      => 'checkbox',
        'label'     => esc_html__('Post Navigator ( OFF | ON )', 'micare'),
        'section'   => 'section_content_blog_single',
        'priority'  => 2
    ))
);

// Social Share
$wp_customize->add_setting(
    'show_social_share',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('show_social_share'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'show_social_share',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Social Share Blog  ( OFF | ON )', 'micare'),
          'section'   => 'section_content_blog_single',
          'priority' => 3,
      ))
  );

// Enable Entry Footer Content
$wp_customize->add_setting(
  'show_entry_footer_content',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_entry_footer_content'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'show_entry_footer_content',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Entry Footer ( OFF | ON )', 'micare'),
        'section' => 'section_content_blog_single',
        'priority' => 4,
    ))
);

// Show Related Posts
$wp_customize->add_setting (
    'show_related_post',
    array (
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => 0,     
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'show_related_post',
    array(
        'type'      => 'checkbox',
        'label'     => esc_html__('Related Posts ( OFF | ON )', 'micare'),
        'section'   => 'section_content_blog_single',
        'priority'  => 5
    ))
);

//Related Posts Style
$wp_customize->add_setting(
    'related_post_style',
    array(
        'default'           => themesflat_customize_default('related_post_style'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'related_post_style',
    array(
        'type'      => 'select',           
        'section'   => 'section_content_blog_single',
        'priority'  => 6,
        'label'         => esc_html__('Related Posts Style', 'micare'),
        'choices'   => array(
            'blog-list' => esc_html__( 'Blog List','micare' ),
            'blog-grid'=>   esc_html__( 'Blog Grid','micare' ),
    ))
);

// Gird columns Related Posts
$wp_customize->add_setting(
    'grid_columns_post_related',
    array(
        'default'           => themesflat_customize_default('grid_columns_post_related'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
    )
);
$wp_customize->add_control(
    'grid_columns_post_related',
    array(
        'type'      => 'select',           
        'section'   => 'section_content_blog_single',
        'priority'  => 7,
        'label'     => esc_html__('Columns Of Related Posts', 'micare'),
        'choices'   => array(                
            2     => esc_html__( '2 Columns', 'micare' ),
            3     => esc_html__( '3 Columns', 'micare' ),
            4     => esc_html__( '4 Columns', 'micare' ),                
        )
    )
);

// Number Of Related Posts
$wp_customize->add_setting (
    'number_related_post',
    array(
        'default' => themesflat_customize_default('number_related_post'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'number_related_post',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Number Of Related Posts', 'micare'),
        'section'   => 'section_content_blog_single',
        'priority'  => 8
    )
);
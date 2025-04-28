<?php 
if (function_exists('themesflat_register_therapists_post_type')) {

    /* therapists Archive 
    =================================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'therapists', array(
        'label' => esc_html__('therapists ARCHIVE', 'micare'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
        ) )
    ); 

    // therapists Slug
    $wp_customize->add_setting (
        'therapists_slug',
        array(
            'default' =>  themesflat_customize_default('therapists_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'therapists_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('therapists Slug', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 2
        )
    );  

    // therapists Name
    $wp_customize->add_setting (
        'therapists_name',
        array(
            'default' =>  themesflat_customize_default('therapists_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'therapists_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('therapists Name', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 3
        )
    );


    // Number Posts therapists
    $wp_customize->add_setting (
        'therapists_number_post',
        array(
            'default' => themesflat_customize_default('therapists_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'therapists_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 4
        )
    );

    // Order By therapists
    $wp_customize->add_setting(
        'therapists_order_by',
        array(
            'default' => themesflat_customize_default('therapists_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'therapists_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 5,
            'choices' => array(
                'date'          => esc_html( 'Date', 'micare' ),
                'id'            => esc_html( 'Id', 'micare' ),
                'author'        => esc_html( 'Author', 'micare' ),
                'title'         => esc_html( 'Title', 'micare' ),
                'modified'      => esc_html( 'Modified', 'micare' ),
                'comment_count' => esc_html( 'Comment Count', 'micare' ),
                'menu_order'    => esc_html( 'Menu Order', 'micare' )
            )        
        )
    );

    // Order Direction therapists
    $wp_customize->add_setting(
        'therapists_order_direction',
        array(
            'default' => themesflat_customize_default('therapists_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'therapists_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 6,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'micare' ),
                'ASC'  => esc_html( 'Assending', 'micare' )
            )        
        )
    );

    // therapists Exclude Post
    $wp_customize->add_setting (
        'therapists_exclude',
        array(
            'default' =>  themesflat_customize_default('therapists_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'therapists_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 7
        )
    );

    /* therapists Single 
    =================================================*/   
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'therapistsingle', array(
        'label' => esc_html__('Therapists Single', 'micare'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 15
        ) )
    );

    // Customize therapists Featured Title
    $wp_customize->add_setting (
        'therapists_featured_title',
        array(
            'default' => themesflat_customize_default('therapists_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'therapists_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize therapists Featured Title', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 16
        )
    );

}

if (function_exists('themesflat_register_services_post_type')) {

    /* Services Archive 
    ===============================================*/ 
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'services', array(
        'label' => esc_html__('SERVICES ARCHIVE', 'micare'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 25
        ) )
    );

    // Services Slug
    $wp_customize->add_setting (
        'services_slug',
        array(
            'default' =>  themesflat_customize_default('services_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Services Slug', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 26
        )
    );  

    // Services Name
    $wp_customize->add_setting (
        'services_name',
        array(
            'default' =>  themesflat_customize_default('services_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Services Name', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 27
        )
    );

    $wp_customize->add_setting(
        'services_layout',
        array(
            'default'           => themesflat_customize_default('services_layout'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        'services_layout',
        array (
            'type'      => 'select',           
            'section'   => 'section_content_post_type',
            'priority'  => 28,
            'label'         => esc_html__('Sidebar Position', 'micare'),
            'choices'   => array (
                'sidebar-right'     => esc_html__( 'Sidebar Right','micare' ),
                'sidebar-left'      =>  esc_html__( 'Sidebar Left','micare' ),
                'fullwidth'         =>   esc_html__( 'Full Width','micare' ),
            ),
        )
    );

    $wp_customize->add_setting (
        'services_sidebar_list',
        array(
            'default'           => themesflat_customize_default('services_sidebar_list'),
            'sanitize_callback' => 'esc_html',
        )
    );
    $wp_customize->add_control( new themesflat_DropdownSidebars($wp_customize,
        'services_sidebar_list',
        array(
            'type'      => 'dropdown',           
            'section'   => 'section_content_post_type',
            'priority'  => 28,
            'label'         => esc_html__('List Sidebar', 'micare'),
            
        ))
    );

    // Number Posts therapists
    $wp_customize->add_setting (
        'services_number_post',
        array(
            'default' => themesflat_customize_default('services_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 28
        )
    );

    // Gird columns therapists
    $wp_customize->add_setting(
        'services_grid_columns',
        array(
            'default'           => themesflat_customize_default('services_grid_columns'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_grid_columns',
        array(
            'type'      => 'select',           
            'section'   => 'section_content_post_type',
            'priority'  => 28,
            'label'     => esc_html('Grid Columns', 'micare'),
            'choices'   => array(
                2     => esc_html( '2 Columns', 'micare' ),
                3     => esc_html( '3 Columns', 'micare' ),
                4     => esc_html( '4 Columns', 'micare' )
            )
        )
    );    

    // Order By services
    $wp_customize->add_setting(
        'services_order_by',
        array(
            'default' => themesflat_customize_default('services_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 30,
            'choices' => array(
                'date'          => esc_html( 'Date', 'micare' ),
                'id'            => esc_html( 'Id', 'micare' ),
                'author'        => esc_html( 'Author', 'micare' ),
                'title'         => esc_html( 'Title', 'micare' ),
                'modified'      => esc_html( 'Modified', 'micare' ),
                'comment_count' => esc_html( 'Comment Count', 'micare' ),
                'menu_order'    => esc_html( 'Menu Order', 'micare' )
            )        
        )
    );

    // Order Direction services
    $wp_customize->add_setting(
        'services_order_direction',
        array(
            'default' => themesflat_customize_default('services_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 31,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'micare' ),
                'ASC'  => esc_html( 'Assending', 'micare' )
            )        
        )
    );

    // services Exclude Post
    $wp_customize->add_setting (
        'services_exclude',
        array(
            'default' =>  themesflat_customize_default('services_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 32
        )
    );

    // Show filter services
    $wp_customize->add_setting (
        'services_show_filter',
        array (
            'sanitize_callback' => 'themesflat_sanitize_checkbox',
            'default' => themesflat_customize_default('services_show_filter'),     
        )
    );
    $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'services_show_filter',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Filter ( OFF | ON )', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 33
        ))
    );

    // Filter Categories Order
    $wp_customize->add_setting (
        'services_filter_category_order',
        array(
            'default' =>  themesflat_customize_default('services_filter_category_order'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_filter_category_order',
        array(
            'type'      => 'text',
            'label'     => esc_html('Filter Slug Categories Order Split By ","', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 34
        )
    ); 

    /* Services Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'servicessingle', array(
        'label' => esc_html__('SERVICES SINGLE', 'micare'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 40
        ) )
    ); 

    $wp_customize->add_control( 
        'services_single_style',
        array (
            'type'      => 'select',           
            'section'   => 'section_content_post_type',
            'priority'  => 40,
            'label'         => esc_html__('Sidebar Position', 'micare'),
            'choices'   => array (
                'default'     => esc_html__( 'Default','micare' ),
                'top-widget'      =>  esc_html__( 'Top Widget Services Sidebar','micare' ),
            ),
        )
    );

    // Customize Services Featured Title
    $wp_customize->add_setting (
        'services_featured_title',
        array(
            'default' => themesflat_customize_default('services_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Services Featured Title', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 41
        )
    );

     // Show Post Navigator services
     $wp_customize->add_setting (
         'services_title_single',
         array (
             'sanitize_callback' => 'themesflat_sanitize_checkbox',
             'default' => themesflat_customize_default('services_title_single'),     
         )
     );
     $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
         'services_title_single',
         array(
             'type'      => 'checkbox',
             'label'     => esc_html__('Single Title ( OFF | ON )', 'micare'),
             'section'   => 'section_content_post_type',
             'priority'  => 41
         ))
     ); 

    // Show Post Navigator services
    $wp_customize->add_setting (
        'services_show_post_navigator',
        array (
            'sanitize_callback' => 'themesflat_sanitize_checkbox',
            'default' => themesflat_customize_default('services_show_post_navigator'),     
        )
    );
    $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'services_show_post_navigator',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Single Navigator ( OFF | ON )', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 41
        ))
    );  

    // Show Related services
    $wp_customize->add_setting (
        'services_show_related',
        array (
            'sanitize_callback' => 'themesflat_sanitize_checkbox',
            'default' => themesflat_customize_default('services_show_related'),     
        )
    );
    $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'services_show_related',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Related Services ( OFF | ON )', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 42
        ))
    );

    // Number Of Related Posts Service
    $wp_customize->add_setting (
        'number_related_post_services',
        array(
            'default' => themesflat_customize_default('number_related_post_services'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'number_related_post_services',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Number Of Related Posts', 'micare'),
            'section'   => 'section_content_post_type',
            'priority'  => 42
        )
    );

    // Gird columns services related
    $wp_customize->add_setting(
        'services_related_grid_columns',
        array(
            'default'           => themesflat_customize_default('services_related_grid_columns'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_related_grid_columns',
        array(
            'type'      => 'select',           
            'section'   => 'section_content_post_type',
            'priority'  => 43,
            'label'     => esc_html__('Columns Related', 'micare'),
            'choices'   => array(
                2     => esc_html__( '2 Columns', 'micare' ),
                3     => esc_html__( '3 Columns', 'micare' ),
                4     => esc_html__( '4 Columns', 'micare' )
            )
        )
    ); 

}
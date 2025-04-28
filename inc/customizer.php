<?php
/**
 * micare Theme Customizer
 *
 * @package micare
 */

function themesflat_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';    
    $wp_customize->remove_control('display_header_text');
    $wp_customize->remove_control('header_textcolor');
    $wp_customize->remove_control('background_color');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    remove_theme_support( 'custom-header' );
  
    //Heading
    class themesflat_Info extends WP_Customize_Control {
        public $type = 'heading';
        public $label = '';
        public function render_content() {
        ?>
            <h3 class="themesflat-title-control"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }    

    //Title
    class themesflat_Title_Info extends WP_Customize_Control {
        public $type = 'title';
        public $label = '';
        public function render_content() {
        ?>
            <h4><?php echo esc_html( $this->label ); ?></h4>
        <?php
        }
    }    

    //Desc
    class themesflat_Theme_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
            <h3><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }    

    //Desc
    class themesflat_Desc_Info extends WP_Customize_Control {
        public $type = 'desc';
        public $label = '';
        public function render_content() {
        ?>
            <p class="themesflat-desc-control"><?php echo esc_html( $this->label ); ?></p>
        <?php
        }
    }       

    //___GENERAL___//
    $wp_customize->add_section('general_panel',array(
        'title'         => 'General',
        'priority'      => 140,
    ));
    require THEMESFLAT_DIR . "inc/customizer/general.php";

    //__COLOR__//
    $wp_customize->add_panel('color_panel',array(
        'title'         => 'Color',
        'priority'      => 141,
    ));
    require THEMESFLAT_DIR . "inc/customizer/color.php"; 

    //___TYPOGRAPHY___//
    $wp_customize->add_panel('typography_panel',array(
        'title'         => 'Typography',
        'priority'      => 142,
    ));      
    require THEMESFLAT_DIR . "inc/customizer/typography.php";

    //___HEADER___//   
    $wp_customize->add_panel('header_panel',array(
        'title'         => 'Header & Topbar',
        'priority'      => 143,
    ));
    require THEMESFLAT_DIR . "inc/customizer/header.php";

    //___PAGETITLE___//   
    $wp_customize->add_panel('page_title_panel',array(
        'title'         => 'Page Title',
        'priority'      => 144,
    ));
    require THEMESFLAT_DIR . "inc/customizer/page-title.php";

    //___PAGETITLE___//   
    $wp_customize->add_panel('content_panel',array(
        'title'         => 'Content',
        'priority'      => 145,
    ));
    require THEMESFLAT_DIR . "inc/customizer/content.php";
    
   //___FOOTER___//
    $wp_customize->add_panel('footer_panel',array(
        'title'         => 'Footer',
        'priority'      => 146,
    ));      
    require THEMESFLAT_DIR . "inc/customizer/footer.php";

    //___LAYOUT___//
    $wp_customize->get_section( 'background_image' )->title = esc_html__('Layout Style', 'micare');
    $wp_customize->get_section( 'background_image' )->priority = 147;
    require THEMESFLAT_DIR . "inc/customizer/layout.php";

}
add_action( 'customize_register', 'themesflat_customize_register' );

// Text
function themesflat_sanitize_text( $input ) {
    return wp_kses( $input, themesflat_kses_allowed_html() );
}

// Background size
function themesflat_sanitize_bg_size( $input ) {
    $valid = array(
        'cover'     => esc_html__('Cover', 'micare'),
        'contain'   => esc_html__('Contain', 'micare'),
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Blog Layout
function themesflat_sanitize_blog( $input ) {
    $valid = array(
        'sidebar-right'    => esc_html__( 'Sidebar right', 'micare' ),
        'sidebar-left'    => esc_html__( 'Sidebar left', 'micare' ),
        'fullwidth'  => esc_html__( 'Full width (no sidebar)', 'micare' )

    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_pagination
function themesflat_sanitize_pagination ( $input ) {
    $valid = array(
        'pager' => esc_html__('Pager', 'micare'),
        'numeric' => esc_html__('Numeric', 'micare'),
        'page_numeric' => esc_html__('Pager & Numeric', 'micare')                
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_related_post
function themesflat_sanitize_related_post ( $input ) {
    $valid = array(
        'simple_list' => esc_html__('Simple List', 'micare'),
        'grid' => esc_html__('Grid', 'micare')        
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Footer widget areas
function themesflat_sanitize_fw( $input ) {
    $valid = array(
        '0' => esc_html__('footer_default', 'micare'),
        '1' => esc_html__('One', 'micare'),
        '2' => esc_html__('Two', 'micare'),
        '3' => esc_html__('Three', 'micare'),
        '4' => esc_html__('Four', 'micare')
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Header style sanitize
function themesflat_sanitize_headerstyle( $input ) {
    $valid = themesflat_predefined_header_styles();
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Checkboxes
function themesflat_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

// Themesflat_sanitize_related_portfolio
function themesflat_sanitize_related_portfolio( $input ) {
    $valid = array(
        'grid'                 => esc_html__( 'Grid', 'micare' ),
        'grid_masonry'         => esc_html__( 'Grid Masonry', 'micare' ),
        'grid_nomargin'        => esc_html__( 'Grid Masonry No Margin', 'micare' ),
        'carosuel'             => esc_html__( 'Carosuel', 'micare' ),
        'carosuel_nomargin'    => esc_html__( 'Carosuel No Margin', 'micare' )       
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_pagination
function themesflat_sanitize_portfolio_pagination( $input ) {
    $valid = array(
        'page_numeric'         => esc_html__( 'Pager & Numeric', 'micare' ),
        'load_more'         => esc_html__( 'Load More', 'micare' )     
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_order
function themesflat_sanitize_portfolio_order( $input ) {
    $valid = array(
        'date'          => esc_html__( 'Date', 'micare' ),
        'id'            => esc_html__( 'Id', 'micare' ),
        'author'        => esc_html__( 'Author', 'micare' ),
        'title'         => esc_html__( 'Title', 'micare' ),
        'modified'      => esc_html__( 'Modified', 'micare' ),
        'comment_count' => esc_html__( 'Comment Count', 'micare' ),
        'menu_order'    => esc_html__( 'Menu Order', 'micare' )     
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_order_direction
function themesflat_sanitize_portfolio_order_direction( $input ) {
    $valid = array(
        'DESC' => esc_html__( 'Descending', 'micare' ),
        'ASC'  => esc_html__( 'Assending', 'micare' )       
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_grid_portfolio
function themesflat_sanitize_grid_portfolio( $input ) {
    $valid = array(
        'portfolio-two-columns'     => esc_html__( '2 Columns', 'micare' ),
        'portfolio-three-columns'     => esc_html__( '3 Columns', 'micare' ),
        'portfolio-four-columns'     => esc_html__( '4 Columns', 'micare' ),
        'portfolio-five-columns'     => esc_html__( '5 Columns', 'micare' )
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_grid_portfolio_related
function themesflat_sanitize_grid_portfolio_related( $input ) {
    $valid = array(
        'portfolio-one-columns'     => esc_html__( '1 Columns', 'micare' ),
        'portfolio-two-columns'     => esc_html__( '2 Columns', 'micare' ),
        'portfolio-three-columns'     => esc_html__( '3 Columns', 'micare' ),
        'portfolio-four-columns'     => esc_html__( '4 Columns', 'micare' ),
        'portfolio-five-columns'     => esc_html__( '5 Columns', 'micare' )
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_grid_post_related
function themesflat_sanitize_grid_post_related( $input ) {
    $valid = array(        
        2    => esc_html__( '2 Columns', 'micare' ),
        3    => esc_html__( '3 Columns', 'micare' ),
        4    => esc_html__( '4 Columns', 'micare' ), 
        5    => esc_html__( '5 Columns', 'micare' ),       
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_layout_product
function themesflat_sanitize_layout_product( $input ) {
    $valid = array(        
        'fullwidth'         => esc_html__( 'No Sidebar', 'micare' ),
        'sidebar-right'           => esc_html__( 'Sidebar Right', 'micare' ),
        'sidebar-left'         => esc_html__( 'Sidebar Left', 'micare' )
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


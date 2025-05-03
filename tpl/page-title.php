<?php 
if ( is_page() && is_page_template( 'tpl/front-page.php' ) ) {
    return;
}

$titles = themesflat_get_page_titles();    
ob_start();
if ( $titles['title'] ) { printf( '%s', wp_kses_post($titles['title']) ); }
$title = ob_get_clean();


?>
<!-- Page title -->
<?php
$page_title_styles = themesflat_get_opt('page_title_styles');
$bread_crumb_description = themesflat_get_opt('bread_crumb_description');
$page_title_alignment = themesflat_get_opt('page_title_alignment');
$page_title_video_url = themesflat_get_opt('page_title_video_url');

$style_blog_single = themesflat_get_opt('style_blog_single');
if (themesflat_get_opt_elementor('style_blog_single') != '') {
    $style_blog_single = themesflat_get_opt_elementor('style_blog_single');
}
global $post;
$post_id = $post->ID;
?>
<header class="page-header">

    <?php if ( is_singular( 'post' ) && isset( $post ) && $style_blog_single == 'content-single' ) {
        get_template_part( 'tpl/feature-post-single');
    } ?>

    <div
        class="page-title <?php echo esc_attr($page_title_styles); ?> <?php echo esc_attr($page_title_alignment); ?> <?php echo themesflat_get_opt_elementor('extra_classes_pagetitle'); ?>">

        <?php if ( $page_title_video_url != '' ):?>
        <div id="ptbgVideo" class="player"
            data-property="{videoURL:'<?php echo esc_url($page_title_video_url); ?>',containment:'.page-title', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'large'}">
        </div>
        <?php endif;?>
        <div class="overlay"></div>
        <div class="container-full">
            <div class="row">
                <div class="page-title-container">
                    <?php 
                    if ( themesflat_get_opt( 'breadcrumb_enabled' ) == 1 ):
                        themesflat_breadcrumb();
                    endif;                       
                ?>

<?php                 
                    if ( themesflat_get_opt('page_title_heading_enabled') == 1 ) {
                        echo sprintf('<h1 class="page-title-heading">%s</h1>', $title); 
                    }  
                ?>
                   
                    <?php if(!empty($bread_crumb_description)): ?>
                    <p class="page-title-des"><?php echo wp_kses_post($bread_crumb_description); ?></p>
                    <?php endif; ?>

                        <div class="list-meta-single">

                    <?php 
                        if ( is_singular( 'post' ) && isset( $post ) && $style_blog_single == 'content-single' ) {

                            // Author
                            echo '<span class="item-meta post-author">';

                            echo get_avatar( get_the_author_meta( 'ID', $post->post_author ), 30 );
                            
                            printf(
                                '<a class="meta-text" href="%s" title="%s" rel="author">%s</a>',
                                esc_url( get_author_posts_url( get_the_author_meta( 'ID', $post->post_author ) ) ),
                                esc_attr( sprintf(
                                    esc_html__( 'View all posts by %s', 'micare' ),
                                    get_the_author_meta( 'display_name', $post->post_author )
                                ) ),
                                get_the_author_meta( 'display_name', $post->post_author )
                            );
                            
                            echo '</span>';
                            

                            echo '<span class="item-meta post-categories"><i class="icon-micare-tag"></i>'.esc_html__("",'micare');
                            the_category( ', ' );
                        echo '</span>';

                            echo'<span class="item-meta post-comments">
                            <span class="meta-text"><i class="icon-micare-comments"></i>';
                            
                                    comments_number ();
                            echo '</span></span>';
                        }
                        ?>
                        </div>


                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
</header><!-- /.page-header -->

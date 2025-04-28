<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package micare
 */
?>        
        </div><!-- #content -->
    </div><!-- #main-content -->

    <?php get_template_part( 'tpl/partner'); ?>

    <?php if ( themesflat_get_opt_elementor( 'enable_footer_fixed') == 1 ) : ?>
        <div class="footer-sticky-block"></div>
    <?php endif; ?> 

    <!-- Start Footer -->   
    <div class="footer_background <?php echo esc_attr(themesflat_get_opt_elementor( 'enable_footer_fixed') == 1 ? 'footer-sticky' : ''); ?> <?php echo themesflat_get_opt_elementor('extra_classes_footer'); ?>">
        <div class="overlay-footer"></div>
        <!-- Info Footer -->
        <?php get_template_part( 'tpl/footer/info-footer'); ?>

        <!-- Footer Widget -->
        <?php get_template_part( 'tpl/footer/footer-widgets'); ?>

        <!-- Footer action -->
        <?php get_template_part( 'tpl/action-box'); ?>
       
        <!-- Bottom -->
        <?php get_template_part( 'tpl/footer/bottom'); ?>
        
    </div> <!-- Footer Background Image --> 
    <!-- End Footer --> 

    <?php if ( themesflat_get_opt( 'go_top') == 1 ) : ?>
        <!-- Go Top -->
        <div class="go-top">
            <i class="icon-micare-angle-down"></i>
        </div>
    <?php endif; ?> 
</div><!-- /#boxed -->
<?php wp_footer(); ?>
</body>
</html>
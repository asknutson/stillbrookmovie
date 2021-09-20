<?php
/**
 * Recommended plugins
 *
 * @package Anymags
 */

if ( ! function_exists( 'xpand_blog_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function xpand_blog_recommended_plugins() {

         $plugins = array(
			array(
                'name'     => esc_html__( 'Photo Gallery Builder', 'xpand-blog' ),
                'slug'     => 'photo-gallery-builder',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Accordion Slider Gallery', 'xpand-blog' ),
                'slug'     => 'accordion-slider-gallery',
                'required' => false,
            ),
			array(
                'name'     => esc_html__( 'Timeline', 'xpand-blog' ),
                'slug'     => 'timeline-event-history',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'xpand_blog_recommended_plugins' );
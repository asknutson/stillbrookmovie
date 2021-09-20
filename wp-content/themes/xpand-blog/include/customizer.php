<?php
function xpand_blog_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh))
    {
        $wp_customize
            ->selective_refresh
            ->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'xpand_blog_customize_partial_blogname',
        ));
        $wp_customize
            ->selective_refresh
            ->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'xpand_blog_customize_partial_blogdescription',
        ));
    }
    require get_template_directory() . '/include/theme-settings.php';
}
add_action('customize_register', 'xpand_blog_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function xpand_blog_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function xpand_blog_customize_partial_blogdescription()
{
    bloginfo('description');
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function xpand_blog_customize_script()
{
    wp_enqueue_script('xpand-blog-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array(
        'customize-preview'
    ) , XPAND_BLOG_VERSION, true);

    wp_localize_script('xpand-blog-repeater', 'xpand_blog_customize', array(
        'nonce' => wp_create_nonce('xpand_blog_customize_nonce') ,

    ));
}
add_action('customize_controls_enqueue_scripts', 'xpand_blog_customize_script');

if (!function_exists('xpand_blog_header_social_active_callback')):
    function xpand_blog_header_social_active_callback()
    {
        $show_social = get_theme_mod('xpand_blog_left_header_social_icon_display', true);

        if ($show_social)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
endif;

if (!function_exists('xpand_blog_footer_copyright_callback')):
    function xpand_blog_footer_copyright_callback()
    {

        $show_copyright = get_theme_mod('xpand_blog_footer_copyright_display', true);

        if (true == $show_copyright)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
endif;

if (!function_exists('xpand_blog_copyright_callback')):
    function xpand_blog_copyright_callback()
    {

        $show_copyright = get_theme_mod('xpand_blog_footer_copyright_display', true);

        if (true == $show_copyright)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
endif;

if (!function_exists('xpand_blog_slider_callback')):
    function xpand_blog_slider_callback()
    {

        $show_slider = get_theme_mod('xpand_blog_slider_display', true);

        if (true == $show_slider)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
endif;
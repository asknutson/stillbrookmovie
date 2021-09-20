<?php
if (!defined('XPAND_BLOG_VERSION'))
{
    // Replace the version number of the theme on each release.
    define('XPAND_BLOG_VERSION', '1.0.0');
}

if (!function_exists('xpand_blog_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function xpand_blog_setup()
    {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
        */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'main-menu' => esc_html__('Main Menu', 'xpand-blog') ,
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
        */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('xpand_blog_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'xpand_blog_setup');

function xpand_blog_content_width()
{
    $GLOBALS['content_width'] = apply_filters('xpand_blog_content_width', 640);
}
add_action('after_setup_theme', 'xpand_blog_content_width', 0);

function xpand_blog_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'xpand-blog') ,
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'xpand-blog') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'xpand-blog') ,
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'xpand-blog') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'xpand-blog') ,
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'xpand-blog') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'xpand-blog') ,
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'xpand-blog') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'xpand-blog') ,
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'xpand-blog') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

}
add_action('widgets_init', 'xpand_blog_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function xpand_blog_scripts()
{
    wp_enqueue_style('xpand-blog-style', get_stylesheet_uri() , array() , XPAND_BLOG_VERSION);

    //CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style('xpand-blog-font', 'https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic');

    wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css');

    //JS
    wp_enqueue_script('xpand-blog-custom', get_template_directory_uri() . '/assets/js/xpand-blog-custom.js', array(
        'jquery'
    ) , XPAND_BLOG_VERSION, true);

    global $wp_query;
    $paged = (get_query_var('paged') > 1) ? get_query_var('paged') : 1;
    $max_num_pages = $wp_query->max_num_pages;
    wp_localize_script('xpand-blog-custom', 'xpand_blog_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php') ,
        'paged' => absint($paged) ,
        'max_num_pages' => absint($max_num_pages) ,
        'next_posts' => next_posts(absint($max_num_pages) , false) ,
        'show_more' => __('Load More', 'xpand-blog') ,
        'no_more_posts' => __('No More', 'xpand-blog') ,
    ));

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(
        'jquery','jquery-masonry'
    ) , XPAND_BLOG_VERSION, true);

    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.js', array() , XPAND_BLOG_VERSION, true);

    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/assets/js/fontawesome.js', array() , XPAND_BLOG_VERSION, true);


    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'xpand_blog_scripts');

function xpand_blog_excerpt_more($more)
{
    $more = '...';
    if (is_admin())
    {
        return $more;
    }
}
add_filter('excerpt_more', 'xpand_blog_excerpt_more');

if (!function_exists('xpand_blog_load_more_pagination')):
    function xpand_blog_load_more_pagination()
    {

        $xpand_blog_pagination_option = get_theme_mod('xpand_blog_pagination_options', esc_html__('loadmore', 'xpand-blog'));
        if ('number' == $xpand_blog_pagination_option)
        {
            echo "<div class='pagination'>";
            global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))) ,
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')) ,
                'total' => $wp_query->max_num_pages,
                'prev_text' => __('<i class="fa fa-angle-left"></i>', 'xpand-blog') ,
                'next_text' => __('<i class="fa fa-angle-right"></i>', 'xpand-blog') ,
            ));
            echo "<div>";
        }
        elseif ('loadmore' == $xpand_blog_pagination_option)
        {
            $page_number = get_query_var('paged');
            if ($page_number == 0)
            {
                $output_page = 2;
            }
            else
            {
                $output_page = $page_number + 1;
            }
            if (paginate_links())
            {
                echo "<div class='ajax-pagination text-center'><div class='show-more' data-number='$output_page'><i class='fa fa-refresh'></i>" . esc_html__('Load More', 'xpand-blog') . "</div><div id='free-temp-post'></div></div></a>";
            }
        }
        else
        {
            return false;
        }
    }
endif;
add_action('xpand_blog_action_load_pagination', 'xpand_blog_load_more_pagination', 10);

if (!function_exists('xpand_blog_get_fontawesome_ajax')):
    /**
     * Return an array of all icons.
     */
    function xpand_blog_get_fontawesome_ajax()
    {
        // Bail if the nonce doesn't check out
        if (!isset($_POST['xpand_blog_customize_nonce']) || !wp_verify_nonce(sanitize_key($_POST['xpand_blog_customize_nonce']) , 'xpand_blog_customize_nonce'))
        {
            wp_die();
        }

        // Do another nonce check
        check_ajax_referer('xpand_blog_customize_nonce', 'xpand_blog_customize_nonce');

        // Bail if user can't edit theme options
        if (!current_user_can('edit_theme_options'))
        {
            wp_die();
        }

        // Get all of our fonts
        $fonts = xpand_blog_get_fontawesome_list();

       
        if ($fonts)
        { ?>
        <ul class="font-group">
            <?php
            foreach ($fonts as $font)
            {
                echo '<li data-font="' . esc_attr($font) . '"><i class="' . esc_attr($font) . '"></i></li>';
            }
?>
        </ul>
        <?php
        }
        

        // Exit
        wp_die();
    }
endif;
add_action('wp_ajax_xpand_blog_get_fontawesome_ajax', 'xpand_blog_get_fontawesome_ajax');


if (!function_exists('xpand_blog_social_sharing')) :
    function xpand_blog_social_sharing($post_id)
    {
        $xpand_blog_url = get_the_permalink($post_id);
        $xpand_blog_title = get_the_title($post_id);
        $xpand_blog_image = get_the_post_thumbnail_url($post_id);
        
        //sharing url
        $xpand_blog_twitter_sharing_url = esc_url('http://twitter.com/share?text=' . $xpand_blog_title . '&url=' . $xpand_blog_url);
        $xpand_blog_facebook_sharing_url = esc_url('https://www.facebook.com/sharer/sharer.php?u=' . $xpand_blog_url);
        $xpand_blog_pinterest_sharing_url = esc_url('http://pinterest.com/pin/create/button/?url=' . $xpand_blog_url . '&media=' . $xpand_blog_image . '&description=' . $xpand_blog_title);
        $xpand_blog_linkedin_sharing_url = esc_url('http://www.linkedin.com/shareArticle?mini=true&title=' . $xpand_blog_title . '&url=' . $xpand_blog_url);
        
        ?>
        <div class="meta_bottom">
            <div class="social-share">
                <a target="_blank" href="<?php echo esc_html($xpand_blog_facebook_sharing_url); ?>" class="fb"><i class="fa fa-facebook "></i></a>
                <a target="_blank" href="<?php echo esc_html($xpand_blog_twitter_sharing_url); ?>" class="tiwt"><i
                            class="fa fa-twitter "></i></a>
                <a target="_blank" href="<?php echo esc_html($xpand_blog_pinterest_sharing_url); ?>" class="pin"><i
                            class="fa fa-pinterest "></i></a>
                <a target="_blank" href="<?php echo esc_html($xpand_blog_linkedin_sharing_url); ?>" class="linkd"><i class="fa fa-linkedin "></i></a>
            </div>
        </div>
        <?php
    }
endif;
add_action('xpand_blog_social_sharing', 'xpand_blog_social_sharing', 10);

require get_template_directory()  . '/include/tgm/class-tgm-plugin-activation.php';
require get_template_directory(). '/include/tgm/hook-tgm.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/include/template-tags.php';
require get_template_directory() . '/include/custom-header.php';
require get_template_directory() . '/include/controls.php';
require get_template_directory() . '/include/customizer.php';
require get_template_directory() . '/include/fontawesome.php';

require_once( trailingslashit( get_template_directory() ) . '/include/custom-button/class-customize.php' );
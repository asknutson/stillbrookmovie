<?php  get_header(); 
    $showslider=get_theme_mod('xpand_blog_slider_display',true);
    $has_header_image = has_header_image();
    if($showslider){
        get_template_part( 'template-parts/content', 'slider' );
    }
    else{
    ?>
        <header class="main-header post-head" <?php if (!empty($has_header_image)) { ?> style="background-image: url(
                        <?php echo esc_url(header_image()); ?>); background-size: cover;"
                            <?php } ?>>
            <div class="vertical">
                <div class="main-header-content inner">
                    <h3 class="heading-title mb-20"><?php the_title(); ?></h3>
                </div>
            </div>
        </header>
    <?php
    }
    $sidebar_position = get_theme_mod('xpand_blog_sidebar_position', esc_html__( 'grid', 'xpand-blog' ));
    $grid='';
    if ($sidebar_position == 'left') {
        $sidebar_position = 'has-left-sidebar';
    } elseif ($sidebar_position == 'right') {
        $sidebar_position = 'has-right-sidebar';
    } elseif ($sidebar_position == 'no') {
        $sidebar_position = 'no-sidebar';
    }
    elseif ($sidebar_position == 'grid'){
        $grid='gridlayout';
    }
    if($grid=='gridlayout'){
        require get_template_directory() . '/template/grid.php';    
    }
    else{
    ?>
    <section class="xpand-blog-wp-blog-section ptb-20 bg-color">
        <div class="container" id="jumber">
            <div class="row <?php echo esc_attr($sidebar_position); ?>">
                <?php if(is_active_sidebar( 'sidebar-1' )) { ?>
                <div class="col-lg-8 ">

                    <?php
                }
                else{
                    ?>
                    <div class="col-lg-12">
                    <?php
                }
                    if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) :
                        ?>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        <?php
                    endif;
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;
                    ?>
                        <div class="pagination pt-5">
                            <nav class="Page navigation">
                                <?php
                                    echo paginate_links();
                                ?>
                            </nav>
                        </div>
                    <?php
                    else :

                    get_template_part( 'theme-parts/content', 'none' );

                    endif;
                    ?>
                </div>
                <?php
                if (($sidebar_position == 'has-left-sidebar') || ($sidebar_position == 'has-right-sidebar')) { ?>
                    <div class="col-lg-4">
                        <?php get_sidebar();?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
        }
get_footer(); ?>
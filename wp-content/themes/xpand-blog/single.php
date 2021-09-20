<?php get_header(); 
$has_header_image = has_header_image();
?>
    <header class="main-header post-head " <?php if (!empty($has_header_image)) { ?> style="background-image: url(
                        <?php echo esc_url(header_image()); ?>); background-size: cover;"
                            <?php } ?>>
        <div class="vertical">
            <div class="main-header-content inner">
                <?php
                    if ( is_singular() ) :
                the_title( '<h1 class="title mb-20">', '</h1>' );
                else :
                the_title( '<h2 class="title mb-20"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?> 
            </div>
        </div>
    </header>
    <section class="xpand-blog-wp-blog-section ptb-20 bg-color blog-details-shadow" id="primary">
        <div class="container" id="jumber">
            <?php
            $sidebar_position = get_theme_mod('xpand_blog_sidebar_position', esc_html__( 'right', 'xpand-blog' ));
            if ($sidebar_position == 'left') {
                $sidebar_position = 'has-left-sidebar';
            } elseif ($sidebar_position == 'right') {
                $sidebar_position = 'has-right-sidebar';
            } elseif ($sidebar_position == 'no') {
                $sidebar_position = 'no-sidebar';
            }elseif ($sidebar_position == 'grid') {
                $sidebar_position = 'has-right-sidebar';
            }
            ?>
            <div class="row <?php echo esc_attr($sidebar_position); ?>">
                <?php if(is_active_sidebar( 'sidebar-1' )) { ?>
                <div class="col-lg-8">
                    <?php
                }
                else{
                    ?>
                    <div class="col-lg-12">
                    <?php
                }
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'single' );
                        
                        // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;                         
                        endwhile; // End of the loop.
                    ?>
                </div>
                <?php if (($sidebar_position == 'has-left-sidebar') || ($sidebar_position == 'has-right-sidebar')|| ($sidebar_position == 'grid')) { ?>
                    <div class="col-lg-4">
                        <?php get_sidebar();?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
get_footer(); ?>
<?php get_header();
    $has_header_image = has_header_image();
?>
    <div class="error-page-section">
        <div class="error-page-inner">
            <header class="main-header post-head" <?php if (!empty($has_header_image)) { ?> style="background-image: url(
                        <?php echo esc_url(header_image()); ?>); background-size: cover;"
                            <?php } ?>>
                <div class="vertical">
                    <div class="main-header-content page-404">
                        <h1><?php echo esc_html__('404','xpand-blog');?></h1>
                    </div>
                </div>
            </header>   
            <main id="content" class="content" role="main">
                <div class="errorpage" id="primary">
                <h3><i class="fa fa-exclamation-triangle"></i><?php echo esc_html__('Sorry! Page Not Found','xpand-blog');?></h3>
                <p>
                    <?php echo esc_html__('Your searched terms not found please try another keyword.','xpand-blog');?>
                </p>
                    <div class="btn-group">
                        <a href="<?php echo esc_url(home_url());?>" class="btn">
                            <?php echo esc_html__('Home Page','xpand-blog');?>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php get_footer();?>
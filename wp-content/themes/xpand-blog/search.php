<?php get_header(); 
$has_header_image = has_header_image();
?>
	<header class="main-header post-head" <?php if (!empty($has_header_image)) { ?> style="background-image: url(
                        <?php echo esc_url(header_image()); ?>); background-size: cover;"
                            <?php } ?>>
		<div class="vertical">
			<div class="main-header-content inner">
				<?php
					printf( esc_html__( 'Search Results for: %s', 'xpand-blog' ), '<span>' . get_search_query() . '</span>' );
				?> 
			</div>
		</div>
	</header>
	<?php
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
		    $grid = 'gridlayout';
		}
        if($grid=='gridlayout'){
        	if ( have_posts() ) :
            require get_template_directory() . '/template/grid.php';    
            else :
					get_template_part( 'template-parts/content', 'none' );

			endif;
        }
        else{
    ?>
	<section class="xpand-blog-wp-blog-section ptb-20 bg-color" id="primary">
		<div class="container" id="jumber">
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
				if ( have_posts() ) :
		
				/* Start the Loop */
				while ( have_posts() ) :
				the_post();
					get_template_part( 'template-parts/content', 'search' );
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
				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>
				<?php if (($sidebar_position == 'has-left-sidebar') || ($sidebar_position == 'has-right-sidebar')) { ?>
				<div class="col-lg-4">
					<?php get_sidebar();?>
				</div>
				<?php  } ?>
			</div>
		</div>
	</section>
	<?php
    }
get_footer(); ?>
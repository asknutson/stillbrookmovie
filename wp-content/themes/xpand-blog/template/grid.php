<?php get_header();
$showauthor=get_theme_mod('xpand_blog_archive_co_post_author',true);
$showdate=get_theme_mod('xpand_blog_archive_co_post_date',true);
$showimage=get_theme_mod('xpand_blog_archive_co_featured_image',true);
?>
<main id="content" class="content" role="main">
	<div class="wraps" id="primary">
		<div class="grid" id="jumber">
		<?php if(have_posts()):
				while(have_posts()):the_post();
					?>
						<div class="grid-item">
							<article class="post">
								 <?php if($showimage){ 
									xpand_blog_post_thumbnail();
									}
								?>
								<div class="wrapgriditem">
									<header class="post-header">
										<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									</header>
									<section class="post-excerpt">
									<?php the_excerpt();?>
									</section>
									<?php if($showauthor!='' || $showdate!='') { ?>
									<footer class="post-meta">

										<?php 
										if($showauthor){
										echo get_avatar( get_the_author_meta('email'), '30' );
										xpand_blog_posted_by();
										}
										if($showdate){
										?>
										
										<time class="post-date"><?php xpand_blog_posted_on();?></time>
										<?php } ?>
									</footer>
									<?php }?>
								</div>
							</article>
						</div>
					<?php
				endwhile;
			else:
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
		<div class="paging-navigation">
			<?php
				do_action( 'xpand_blog_action_load_pagination');
			?> 
		</div>
	</div>
</main>
<?php
/**
Template Name: Without Sidebar Page
**/
get_header();?>
<header class="main-header post-head ">
<div class="vertical">
	<div class="main-header-content inner">
		<h3 class="heading-title mb-20"><?php the_title(); ?></h3>
	</div>
</div>
</header>	
<section class="xpand-blog-wp-blog-section ptb-20 bg-color blog-details-shadow" id="primary">
	<div class="container">
	<?php
		while (have_posts()):
			the_post();
			get_template_part('template-parts/content', 'page');
			if (comments_open() || get_comments_number()):
				comments_template();
			endif;
		endwhile;  
	?>
	</div>
</section>
<?php get_footer();?>
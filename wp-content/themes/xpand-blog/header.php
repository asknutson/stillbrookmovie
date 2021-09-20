<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); 
$show_social_icon = get_theme_mod('xpand_blog_left_header_social_icon_display',true);
$social_links = get_theme_mod( 'social_links' );
$search_icon = get_theme_mod('xpand_blog_header_search_icon_display',true);

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'xpand-blog' ); ?></a>
	<header id="masthead" class="site-header style-one">
		<div class="container-fluid">
			<div class="row">
				<div class="site-branding col-sm-3 col-md-3 col-lg-3 ">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$xpand_blog_description = get_bloginfo( 'description', 'display' );
					if ( $xpand_blog_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html($xpand_blog_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<div class="col-md-6 col-lg-6 col-sm-6 xpand-blog-menu">
					<nav id="site-navigation" class="xpand-blog-main-navigation">
						<button class="toggle-button" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle">
						<div class="toggle-text"></div>
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
						</button>
						<div class="primary-menu-list main-menu-modal cover-modal" data-modal-target-string=".main-menu-modal">
						<button class="close close-main-nav-toggle" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".main-menu-modal"></button>
							<div class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'xpand-blog' ); ?>">
								<?php
									wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'nav-menu main-menu-modal',
									
									) );
								?>
							</div>
						</div>
					</nav><!-- #site-navigation -->
					<a class="skip-link-menu-end-skip" href="javascript:void(0)"></a>
				</div>
				<div class="social_section col-md-3 col-lg-3 ptb col-sm-3">
					<?php if($show_social_icon) { 
						?>
							<ul class="social-icon-list">
								<?php 
									if($social_links!=''){
									foreach( $social_links as $xpand_blog_link ){
									if( $xpand_blog_link['link'] ){ ?>
										<li>
											<a href="<?php echo esc_url( $xpand_blog_link['link'] ); ?>" target="_blank" rel="nofollow noopener">
												<i class="<?php echo esc_attr( $xpand_blog_link['font'] ); ?>"></i>
											</a>
										</li>          
										<?php
										} 
									}
									} 
								?>
							</ul>
						<?php
					 } 
					 if($search_icon){
					 ?>
					<div class="header-search">
						<button aria-label="<?php esc_attr_e( 'search form open', 'xpand-blog' ); ?>" class="search-btn" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false"><span><?php esc_html_e( 'Search', 'xpand-blog' ); ?></span><i class="fas fa-search"></i></button>
						<div class="header-search-form search-modal cover-modal" data-modal-target-string=".search-modal">
							<div class="header-search-inner-wrap">
							<a class="skip-link-search-back-skip" href="javascript:void(0)"></a>
							<?php get_search_form();?> 
								<button aria-label="<?php esc_attr_e( 'search form close', 'xpand-blog' ); ?>" class="close" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false"></button>
							</div>
						</div>
						<a class="skip-link-search-skip" href="javascript:void(0)"></a>
					</div>
					<?php } ?>
				</div>		
			</div>
		</div>
	</header><!-- #masthead -->
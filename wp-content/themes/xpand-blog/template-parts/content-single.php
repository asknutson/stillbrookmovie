<?php
$showauthor=get_theme_mod('xpand_blog_single_co_post_author',true);
$showdate=get_theme_mod('xpand_blog_single_co_post_date',true);
$showimage=get_theme_mod('xpand_blog_single_co_featured_image_post',true);
$showtag=get_theme_mod('xpand_blog_single_co_post_tags',true);
$showcategory=get_theme_mod('xpand_blog_single_co_post_category',true);
$showsocialicon=get_theme_mod('xpand_blog_single_social_share_icon',true);
?>
<div class="xpand-blog-blog-wrap">
    <?php if($showimage){
         if(has_post_thumbnail()) { ?>
        <div class="image-part ">
            <?php xpand_blog_post_thumbnail(); ?>
        </div>
        <?php } 
            } ?>
    <div class="content-part p-0">
        <?php if($showcategory){
              ?> 
              <div class="category-name"> <?php the_category(' '); ?></div> 
              <?php
            } 
        if ( is_singular() ) :
        the_title( '<h1 class="title mb-20">', '</h1>' );
        else :
        the_title( '<h2 class="title mb-20"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        
        if ('post' === get_post_type()) :
        ?>
        <div class="post-sub-link mb-25">
            <ul>
                <?php if($showauthor){ ?>
                <li class="post-auther-detail">
                    <span class="post-text"><?php esc_html__('Posted by','xpand-blog');?></span><?php xpand_blog_posted_by();?>
                </li>
                <?php }

                 if($showdate){ ?>
                <li class="post-date">
                    <span class="post-on">
                        <?php esc_html_e('Posted on','xpand-blog')?>
                    </span>
                    <span class="date-on">
                        <?php  the_date(); ?>
                    </span>
                </li>
                <?php } ?>
                
            </ul>
        </div>
        <?php endif; ?>                             
        <p class="descriptison">
            <?php
                if (is_singular()) {
                    the_content();
                } else {
                        the_excerpt();
                }
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'xpand-blog'),
                    'after' => '</div>',
                ));
            ?>
        </p>

        <blockquote class="block"><p>
            <?php the_excerpt();?>
        </p></blockquote>
        <?php if($showtag){?>
        <div class="post-tags">
            <a href="#"><?php the_tags(null, ' ', '<br />'); ?></a>
        </div>

        <?php }
        
        if($showsocialicon){
        do_action( 'xpand_blog_social_sharing' ,get_the_ID() );
        }        
        
        $prevPost = get_previous_post();
        $nextPost = get_next_post();
        $previous_post_url = esc_url(get_permalink( get_adjacent_post(false,'',true)));
        $next_post_url = esc_url(get_permalink( get_adjacent_post(false,'',false)));
        
        if(get_previous_post_link()!='' || get_next_post_link()!=''){
        ?>
        <div class="post-navigation">
            <?php if (get_previous_post_link()) {  ?>
            <div class="post-prev">
                <a href="<?php echo esc_url($previous_post_url); ?>">
                    <div class="postnav-image">
                        <i class="fa fa-chevron-left"></i>
                        <div class="overlay"></div> 
                    </div>
                    <div class="prev-post-title">
                        <span><?php echo esc_html__('PREVIOUS POST','xpand-blog'); ?></span>
                        <h6><?php esc_url(previous_post_link( '%link', '%title', true )) ?></h6>
                    </div>
                </a>
            </div>
            <?php } 
                 if (get_next_post_link()) {  ?>
            <div class="post-next">
                <a href="<?php echo esc_url($next_post_url); ?>">
                    <div class="postnav-image">
                        <i class="fa fa-chevron-right"></i>
                        <div class="overlay"></div> 
                    </div> 
                    <div class="next-post-title">
                        <span><?php echo esc_html__('NEXT POST','xpand-blog');?></span>
                        <h6><?php next_post_link( '%link', '%title', true ); ?></h6>
                    </div>               
                </a>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>
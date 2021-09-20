<section class="xpand-blog-wp-hero-slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php 
          $xpand_blog_slide_category      =   get_theme_mod('xpand_blog_featured_category'); 
          $xpand_blog_slide_posts      =   get_theme_mod('xpand_blog_number_of_post',10); 
          $args = array(
          'category_name'=>$xpand_blog_slide_category,
          'posts_per_page'=> $xpand_blog_slide_posts,
          );
          $query = new WP_Query( $args );
            $c = 0;
            $class = '';
          if($query->have_posts()):
                  while($query->have_posts()):$query->the_post();
                     
                  if ( $c == "0" )
                  $class = ' active';
                  else
                  $class=''; 
                      ?>
                      <div class="carousel-item <?php echo esc_html($class); ?>">
                        <?php if (has_post_thumbnail()) { ?>
                           <div class="overlay"></div>
                           <?php the_post_thumbnail(); ?>
                        <?php }else{ ?>
                           <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/defaultthemecolor.png') ?>" class="img-responsive" alt="<?php echo esc_html(get_post_thumbnail_id()); ?>">
                      <?php } ?>
                          <div class="carousel-caption d-md-block">
                              <h5> <a href="<?php  the_permalink();?>"><?php the_title();?> </a></h5>
                              <div class="content">
                                <span class="name"><?php xpand_blog_posted_by();?></span>
                                <span class="post-date"><?php xpand_blog_posted_on();?></span>
                              </div>
                          </div>  
                          <a class="scroll-down icon-arrow-left" href="#jumber" data-offset="-45"><span class="hidden"></span></a>
                      </div>
                      <?php
                      $c++;
                  endwhile;
                else:
                    echo "<p>No Content found</p>";

                endif;
              ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
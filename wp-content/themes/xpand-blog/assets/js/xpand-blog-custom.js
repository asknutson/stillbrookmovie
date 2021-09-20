jQuery(document).ready(function($) {

    var winWidth = $(window).width();
    
    
    $('.sticky-t-bar').addClass('active');
    $('.sticky-t-bar .sticky-bar-content').show();
    $('.sticky-t-bar .close').click(function(){
        if($('.sticky-t-bar').hasClass('active')){
            $('.sticky-t-bar').removeClass('active');
            $('.sticky-t-bar .sticky-bar-content').stop(true, false, true).slideUp();
        }else{
            $('.sticky-t-bar').addClass('active');
            $('.sticky-t-bar .sticky-bar-content').stop(true, false, true).slideDown();
        }
    });

    $(window).on('resize load', function() {
        var siteWidth = $('.site').width();
        var CbgWidth = parseInt(winWidth) - parseInt(siteWidth);
        var finalCbgWidth = parseInt(CbgWidth) / 2;
        $('.custom-background .sticky-t-bar .close').css('right', finalCbgWidth);
    });

    //search toggle js
    $('.header-search > .search-btn').click(function(){
        $(this).siblings('.header-search-form').fadeIn('slow');
    });
    $('.header-search-form .close' && '.header-search-form').click(function(){
        $('.header-search-form').fadeOut('slow');
    });

    $(window).keyup(function(e){
        if(e.key == "Escape") {
            $('.header-search-form').fadeOut('slow');
        }
    });

    $('.header-search-form .search-form').click(function(e){
        e.stopPropagation();
    });

    
    //main navigation
    $('.xpand-blog-main-navigation ul li.menu-item-has-children').find('> a').after('<button class="submenu-toggle"><i class="fa fa-chevron-down"></i></button>');
    $('.xpand-blog-main-navigation ul li.page_item_has_children').find('> a').after('<button class="submenu-toggle"><i class="fa fa-chevron-down"></i></button>');
    
    $('.xpand-blog-main-navigation ul li button.submenu-toggle').on('click', function () {
        $(this).parent('li.menu-item-has-children').toggleClass('active');
        $(this).parent('li.page_item_has_children').toggleClass('active');
        $(this).siblings('.sub-menu').stop(true, false, true).slideToggle();
        $(this).siblings('.children').stop(true, false, true).slideToggle();
    });
    $('.xpand-blog-main-navigation .toggle-button').click(function(){
        $('.primary-menu-list').animate({
            width: 'toggle',
        });
    });
    $('.xpand-blog-main-navigation .close').click(function(){
        $('.primary-menu-list').animate({
            width: 'toggle',
        });
    });

    //for accessibility
    $('.xpand-blog-main-navigation ul li a, .xpand-blog-main-navigation ul li button').focus(function() {
        $(this).parents('li').addClass('focused');
    }).blur(function() {
        $(this).parents('li').removeClass('focused');
    });

    //show/hide scroll button
    $(window).scroll(function(){
        if($(window).scrollTop() >300) {
            $('#back-to-top').addClass('show');
        } else {
            $('#back-to-top').removeClass('show');
        }
    });

    //scroll window to top
    $('#back-to-top').on('click', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 600);
    });

    //add span in widget title
    $('#secondary .widget .widget-title, .site-footer .widget .widget-title').wrapInner('<span></span>');

    //post share toggle
    $('figure.post-thumbnail .share-icon').click(function(e){
        $(this).parent('.post-share').toggleClass('active');
        e.stopPropagation();
    });

    $('figure.post-thumbnail .social-icon-list').click(function(){
        e.stopPropagation();
    });

    $(window).click(function(){
        $('.post-share').removeClass('active');
    });

    //tab js
    $('.tab-btn').click(function(){
        var divId = $(this).attr('id');
        $('.tab-btn').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').stop(true, false, true);
        $('.tab-content').removeClass('active');
        $('#'+divId+'-content').stop(true, false, true).addClass('active');

    });
});

jQuery(document).ready(function() {
    jQuery('.skip-link-menu-end-skip').focus(function(){
        jQuery('.close').focus();
    });

    jQuery('.skip-link-search-skip').focus(function(){
        jQuery('.skip-link-search-back-skip').focus();
    });
});

/* Custom JS File */

(function($) {

    "use strict";

    jQuery(document).ready(function() {
        

    //infinite pagination
    /*new pagination style*/
    var paged = parseInt(xpand_blog_ajax.paged) + 1;
    var max_num_pages = parseInt(xpand_blog_ajax.max_num_pages);
    //alert(max_num_pages);
    var next_posts = xpand_blog_ajax.next_posts;
    //alert(next_posts);
    $(document).on( 'click', '.show-more', function( event ) {
      event.preventDefault();
        var show_more = $(this);
        var click = show_more.attr('data-click');
        if( (paged-1) >= max_num_pages){
            show_more.html(xpand_blog_ajax.no_more_posts)
        }
        if( click == 0 || (paged-1) >= max_num_pages){
            return false;
        }
        show_more.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
        show_more.attr("data-click", 0);
        var page = parseInt( show_more.attr('data-number') );

        $('#free-temp-post').load(next_posts + ' .grid-item', function() {
            /*http://stackoverflow.com/questions/17780515/append-ajax-items-to-masonry-with-infinite-scroll*/
            paged++;/*next page number*/
            next_posts = next_posts.replace(/(\/?)page(\/|d=)[0-9]+/, '$1page$2'+ paged);
            var html = $('#free-temp-post').html();
            $('#free-temp-post').html('');

            // Make jQuery object from HTML string
            var $moreBlocks = $( html ).filter('.grid-item');
            // Append new blocks to container
            $('.grid').append( $moreBlocks ).imagesLoaded(function(){
                // Have Masonry position new blocks
                $('.grid').masonry( 'appended', $moreBlocks );
            });

            show_more.attr("data-number", page+1);
            show_more.attr("data-click", 1);
            show_more.html("<i class='fa fa-refresh'></i>"+xpand_blog_ajax.show_more)
        });
        return false;
    });
    
    //end pagination
    });

})(jQuery);

jQuery(document).ready(function () {
    var $grid = jQuery(".grid").masonry({
        // options...
        itemSelector: ".grid-item",
        gutter: 20,
    });

    $grid.imagesLoaded().progress(function () {
        $grid.masonry("layout");
    });
});
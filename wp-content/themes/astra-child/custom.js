jQuery(document).ready(function(){

jQuery('.home-product-category').removeClass('elementor-grid-mobile-2');
jQuery('.home-product-category').removeClass('elementor-grid-tablet-3');
jQuery('.home-product-category ul').removeClass('elementor-grid');
jQuery('.home-product-category ul').addClass('owl-carousel owl-theme');
jQuery('.home-product-category li').addClass('item');
jQuery('.home-product-category').removeClass('elementor-grid-1');
jQuery('.home-product-category .woocommerce.columns-1').removeClass('columns-1');
jQuery('.home-product-category .products.columns-1').removeClass('columns-1');
jQuery('.home-product-category .product-category').removeClass('first');
jQuery('.home-product-category .product-category').removeClass('last');
jQuery('.woof_auto_show.woof_overflow_hidden').remove();
jQuery('.woof_autohide_wrapper').remove();
jQuery('.related.products>h2').text("FAMILY");

jQuery('.home-product-category ul.products').owlCarousel({
	loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});


jQuery( ".rightside-img .swiper-slide-contents" ).append( '<a href="tel:+4401284811666" class="custom-phone"> OR CALL US ON +44 (0) 1284 811 666 </a>' );

jQuery( "#menu-1-9ed99e9" ).append( '<div class="close-btn"><img class="close-modal" src="/wp-content/uploads/2023/06/Close-modal.png"><img src="/wp-content/uploads/2023/06/logo-1-1.png"></div>' );

jQuery('.open-modal').click(function(){
    jQuery('.sidebar-menu ul#menu-1-9ed99e9').addClass('desktop-sidebar');
});


jQuery('.close-modal').click(function(){
    jQuery('.sidebar-menu ul#menu-1-9ed99e9').removeClass('desktop-sidebar');
});
	
	jQuery('.search-icon').click(function(){
    jQuery('.search-forms').toggleClass('visible-search');
});


    jQuery( '.single_variation_wrap' ).on( 'show_variation', function( event, variation ) {
        var image_mag = variation.image_magnifier;
        
        jQuery('.zoomImg').attr('src',image_mag);
        jQuery('.woocommerce-product-gallery__image').attr('data-o_data-thumb',image_mag);
    } );



});
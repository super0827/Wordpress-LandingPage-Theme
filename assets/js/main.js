"use strict";


jQuery(document).ready(function (jQuery) {

    jQuery(window).load(function () {
        jQuery(".loaded").fadeOut();
        jQuery(".preloader").delay(1000).fadeOut("slow");
    });
    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    jQuery('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if (jQuery('.navbar-toggle').css('display') != 'none') {
                    jQuery(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });


    /*---------------------------------------------*
     * For Price Table
     ---------------------------------------------*/

    checkScrolling(jQuery('.cd-pricing-body'));
    jQuery(window).on('resize', function () {
        window.requestAnimationFrame(function () {
            checkScrolling(jQuery('.cd-pricing-body'))
        });
    });
    jQuery('.cd-pricing-body').on('scroll', function () {
        var selected = jQuery(this);
        window.requestAnimationFrame(function () {
            checkScrolling(selected)
        });
    });

    function checkScrolling(tables) {
        tables.each(function () {
            var table = jQuery(this),
                    totalTableWidth = parseInt(table.children('.cd-pricing-features').width()),
                    tableViewport = parseInt(table.width());
            if (table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
                table.parent('li').addClass('is-ended');
            } else {
                table.parent('li').removeClass('is-ended');
            }
        });
    }

    //switch from monthly to annual pricing tables
    bouncy_filter(jQuery('.cd-pricing-container'));

    function bouncy_filter(container) {
        container.each(function () {
            var pricing_table = jQuery(this);
            var filter_list_container = pricing_table.children('.cd-pricing-switcher'),
                    filter_radios = filter_list_container.find('input[type="radio"]'),
                    pricing_table_wrapper = pricing_table.find('.cd-pricing-wrapper');

            //store pricing table items
            var table_elements = {};
            filter_radios.each(function () {
                var filter_type = jQuery(this).val();
                table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="' + filter_type + '"]');
            });

            //detect input change event
            filter_radios.on('change', function (event) {
                event.preventDefault();
                //detect which radio input item was checked
                var selected_filter = jQuery(event.target).val();

                //give higher z-index to the pricing table items selected by the radio input
                show_selected_items(table_elements[selected_filter]);

                //rotate each cd-pricing-wrapper 
                //at the end of the animation hide the not-selected pricing tables and rotate back the .cd-pricing-wrapper

                if (!Modernizr.cssanimations) {
                    hide_not_selected_items(table_elements, selected_filter);
                    pricing_table_wrapper.removeClass('is-switched');
                } else {
                    pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        hide_not_selected_items(table_elements, selected_filter);
                        pricing_table_wrapper.removeClass('is-switched');
                        //change rotation direction if .cd-pricing-list has the .cd-bounce-invert class
                        if (pricing_table.find('.cd-pricing-list').hasClass('cd-bounce-invert'))
                            pricing_table_wrapper.toggleClass('reverse-animation');
                    });
                }
            });
        });
    }
    function show_selected_items(selected_elements) {
        selected_elements.addClass('is-selected');
    }

    function hide_not_selected_items(table_containers, filter) {
        jQuery.each(table_containers, function (key, value) {
            if (key != filter) {
                jQuery(this).removeClass('is-visible is-selected').addClass('is-hidden');

            } else {
                jQuery(this).addClass('is-visible').removeClass('is-hidden is-selected');
            }
        });
    }



    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    jQuery.localScroll();



    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

//    jQuery('.statistic-counter').counterUp({
//        delay: 10,
//        time: 2000
//    });

    /*---------------------------------------------*
     * Form Helper
     ---------------------------------------------*/

   fwForm.initAjaxSubmit({
        //selector: 'form[some-custom-attribute].or-some-class'
        selector: 'form[data-fw-form-id="fw_form"]',
        ajaxUrl: adminAjax
    });


    /*---------------------------------------------*
     * Header Mailchimp Form
     ---------------------------------------------*/
    if (jQuery('#mailchimpForm').length) {
        jQuery("#mailchimpForm").formchimp();
    }
    
    
    /*---------------------------------------------*
     * Footer Mailchimp Form
     ---------------------------------------------*/
    if (jQuery('#FooterMailchimpForm').length) {
        jQuery("#FooterMailchimpForm").formchimp();
    }

    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

//        var wow = new WOW({
//            mobile: false // trigger animations on mobile devices (default is true)
//        });
//        wow.init();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

//    jQuery('.testimonials').owlCarousel({
//        responsiveClass: true,
//        autoplay: false,
//        items: 1,
//        loop: true,
//        dots: true,
//        autoplayHoverPause: true
//
//    });



// scroll Up

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 600) {
            jQuery('.scrollup').fadeIn('slow');
        } else {
            jQuery('.scrollup').fadeOut('slow');
        }
    });
    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });


    //End
});

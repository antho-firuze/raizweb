jQuery(document).ready(function() {

    jQuery("#menu-icon, .mask, #outmenu-icon").on("click", function() {
        jQuery("#menu-icon, .mask, #main-nav, #outmenu-icon").toggleClass("activemenu");
        jQuery("body").toggleClass("noscroll");
    });

    jQuery("#hidden-panel-1 .flat-form > div").click(function(e) {
        e.stopPropagation();
    });
    jQuery("#hidden-panel-1 .flat-form a").click(function(e) {
        jQuery(this).closest("#hidden-panel-1").removeClass("display").addClass("showall");
    });

    jQuery("img")
        .not(".avs_img_container img, .joomimg_inside img, .jg_catelem_txt img, #slideshow .slideshowck img")
        .wrap("<div class='wrapimg' />");

    jQuery("select, input[list]").not("select[multiple=multiple]").wrap("<div class='wrapselect' />");

    jQuery("#content img").filter(function() {
        return jQuery(this).css("float") == "left";
    }).parent().addClass("alignleft");

    jQuery("#content img").filter(function() {
        return jQuery(this).css("float") == "right";
    }).parent().addClass("alignright");

    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > 180) {
            jQuery("header, #slideshow").addClass("sticky");
        } else {
            jQuery("header, #slideshow").removeClass("sticky");
        }
    });

    //jQuery("a").not(".logo a").attr("href", "#");

    jQuery('#camera_wrap_1').camera({
        thumbnails: false,
        height: '550px',
        loader: 'bar',
    });

    jQuery(function() {
        var timer = !1;
        _Ticker = jQuery("#container-panel-1").newsTicker();
        _Ticker.on("mouseenter", function() {
            var __self = this;
            timer = setTimeout(function() {
                __self.pauseTicker();
            }, 200);
        });
        _Ticker.on("mouseleave", function() {
            clearTimeout(timer);
            if (!timer) return !1;
            this.startTicker();
        });
    });

    jQuery(function() {
        // constants
        var SHOW_CLASS = 'show',
            HIDE_CLASS = 'hide',
            ACTIVE_CLASS = 'active';

        jQuery('.tabs').on('click', 'li a', function(e) {
            e.preventDefault();
            var $tab = jQuery(this),
                href = $tab.attr('href');

            jQuery('.active').removeClass(ACTIVE_CLASS);
            $tab.addClass(ACTIVE_CLASS);

            jQuery('.show')
                .removeClass(SHOW_CLASS)
                .addClass(HIDE_CLASS)
                .hide();

            jQuery(href)
                .removeClass(HIDE_CLASS)
                .addClass(SHOW_CLASS)
                .hide()
                .fadeIn(550);
        });
    });

});

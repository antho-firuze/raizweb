jQuery(document).ready(function () {

  jQuery("#menu-icon, .mask, #outmenu-icon").on("click", function () {
    jQuery("#menu-icon, .mask, #main-nav, #outmenu-icon").toggleClass(
      "activemenu"
    );
    jQuery("body").toggleClass("noscroll");
  });

  jQuery(".item-107 a, #hidden-panel-1").on("click", function (e) {
    e.preventDefault();
    jQuery("#hidden-panel-1").toggleClass("display").removeClass("showall");
    return;
  });
  jQuery("#hidden-panel-1 .flat-form > div").click(function (e) {
    e.stopPropagation();
  });
  jQuery("#hidden-panel-1 .flat-form a").click(function (e) {
    jQuery(this)
      .closest("#hidden-panel-1")
      .removeClass("display")
      .addClass("showall");
  });

  jQuery("img")
    .not(
      ".avs_img_container img, .joomimg_inside img, .jg_catelem_txt img, #slideshow .slideshowck img"
    )
    .wrap("<div class='wrapimg' />");

  jQuery("select, input[list]")
    .not("select[multiple=multiple]")
    .wrap("<div class='wrapselect' />");

  jQuery("#content img")
    .filter(function () {
      return jQuery(this).css("float") == "left";
    })
    .parent()
    .addClass("alignleft");

  jQuery("#content img")
    .filter(function () {
      return jQuery(this).css("float") == "right";
    })
    .parent()
    .addClass("alignright");

  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 180) {
      jQuery("header, #slideshow").addClass("sticky");
    } else {
      jQuery("header, #slideshow").removeClass("sticky");
    }
  });

  //jQuery("a").not(".logo a").attr("href", "#");

  jQuery(function () {
    // constants
    var SHOW_CLASS = "show",
      HIDE_CLASS = "hide",
      ACTIVE_CLASS = "active";

    jQuery(".tabs").on("click", "li a", function (e) {
      e.preventDefault();
      var $tab = jQuery(this),
        href = $tab.attr("href");

      jQuery(".active").removeClass(ACTIVE_CLASS);
      $tab.addClass(ACTIVE_CLASS);

      jQuery(".show").removeClass(SHOW_CLASS).addClass(HIDE_CLASS).hide();

      jQuery(href)
        .removeClass(HIDE_CLASS)
        .addClass(SHOW_CLASS)
        .hide()
        .fadeIn(550);
    });
  });

  jQuery(function () {
    jQuery("#form_tanggallahir").datepicker();
  });

  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  jQuery(".next").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = jQuery(this).parent().parent().parent();
    next_fs = jQuery(this).parent().parent().parent().next();

    //activate next step on progressbar using the index of next_fs
    jQuery("#progressbar li")
      .eq(jQuery("fieldset").index(next_fs))
      .addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      {
        opacity: 0,
      },
      {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = now * 50 + "%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            transform: "scale(" + scale + ")",
            position: "absolute",
          });
          next_fs.css({
            left: left,
            opacity: opacity,
            position: "relative",
          });
        },
        duration: 500,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: "easeOutQuint",
      }
    );
  });

  jQuery(".previous").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = jQuery(this).parent().parent().parent();
    previous_fs = jQuery(this).parent().parent().parent().prev();

    //de-activate current step on progressbar
    jQuery("#progressbar li")
      .eq(jQuery("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      {
        opacity: 0,
      },
      {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = (1 - now) * 50 + "%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            left: left,
            position: "absolute",
          });
          previous_fs.css({
            transform: "scale(" + scale + ")",
            opacity: opacity,
            position: "relative",
          });
        },
        duration: 500,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: "easeOutQuint",
      }
    );
  });

  jQuery(".submit").click(function () {
    return false;
  });

  jQuery(".divbutton input[type='button']").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: jQuery("#content .contentinside").offset().top,
      },
      1000
    );
  });

  jQuery(function () {
    var concatNames = function (first, middle, last) {
      //this is locale specific
      return first + " " + middle + " " + last;
    };
    jQuery(
      "input#form_namadepan, input#form_namatengah, input#form_namabelakang"
    ).keyup(function () {
      var fullName = concatNames(
        jQuery("input#form_namadepan").val(),
        jQuery("input#form_namatengah").val(),
        jQuery("input#form_namabelakang").val()
      );
      jQuery('input[id^="form_namalengkap"]').val(fullName);
    });
  });

  jQuery(function () {
    jQuery('#entryRekening input[name="form_rekjenisbank"]').on(
      "click",
      function () {
        if (jQuery(this).val() == "form_rekbanklokal") {
          jQuery("#form_reknamabank1").prop("disabled", false);
          jQuery("#form_reknamabank2").prop("disabled", true).val("");
        } else if (jQuery(this).val() == "form_rekbankluar") {
          jQuery("#form_reknamabank2").prop("disabled", false);
          jQuery("#form_reknamabank1").prop("disabled", true).val("");
        }
      }
    );
  });

  jQuery("#entryAddress .col-1-1 select").change(function () {
    if (jQuery(this).val() == "Indonesia") {
      jQuery(this)
        .closest(".wrapcol")
        .find('.item-row *[class$="lokal"]')
        .not(this)
        .show()
        .css("display", "inline-block");
      jQuery(this)
        .closest(".wrapcol")
        .find('.item-row *[class$="luneg"]')
        .hide();
    } else {
      jQuery(this)
        .closest(".wrapcol")
        .find('.item-row *[class$="luneg"]')
        .show()
        .css("display", "inline-block");
      jQuery(this)
        .closest(".wrapcol")
        .find('.item-row *[class$="lokal"]')
        .not(this)
        .hide();
    }
  });

  jQuery(".divTableCell:contains('\u00a0')").addClass("spaceblank");
});

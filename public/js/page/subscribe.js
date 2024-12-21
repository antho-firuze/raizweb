jQuery(document).ready(function () {
  jQuery("#menu-icon, .mask, #outmenu-icon").on("click", function () {
    jQuery("#menu-icon, .mask, #main-nav, #outmenu-icon").toggleClass(
      "activemenu"
    );
    jQuery("body").toggleClass("noscroll");
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

  jQuery("#wrapHeadID .cellBtn, #hidden-panel-2").on("click", function (e) {
    e.preventDefault();
    jQuery("#hidden-panel-2").toggleClass("showPanel");
    jQuery("body").toggleClass("noscroll");
    return;
  });
  jQuery("#hidden-panel-2 .item-page").click(function (e) {
    e.stopPropagation();
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
    $("#from_date").val(getURLParam("from_date"));
    $("#to_date").val(getURLParam("to_date"));

    var dateFormat = "mm/dd/yy",
      from = jQuery("#from_date")
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
        })
        .on("change", function () {
          to.datepicker("option", "minDate", getDate(this));
        }),
      to = jQuery("#to_date")
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
        })
        .on("change", function () {
          from.datepicker("option", "maxDate", getDate(this));
        });

    function getDate(element) {
      var date;
      try {
        date = jQuery.datepicker.parseDate(dateFormat, element.value);
      } catch (error) {
        date = null;
      }
      return date;
    }
  });

  jQuery(".wrapuUploadBtn input[type=file]").hover(
    function () {
      jQuery(this).siblings("button").addClass("hover");
    },
    function () {
      jQuery(this).siblings("button").removeClass("hover");
    }
  );

  jQuery("#terms").click(function () {
    if (jQuery("#terms:checked").length) {
      jQuery("#entrySubsBtn input[type=submit]").removeAttr("disabled");
    } else {
      jQuery("#entrySubsBtn input[type=submit]").attr("disabled", "disabled");
    }
  });

  jQuery(".divTableCell:contains('\u00a0')").addClass("spaceblank");

  jQuery(function ($) {
    // ELEMENT
    let portfolio = $("select[name=portfolio_id");
    let account_id = $("select[name=account_id");

    // LOADING DATA
    $.getJSON(getUrl("api/mobc_product_list"), {}).done(function (data) {
      console.log("success: api/mobc_product_list");
      // console.log(data);
      portfolio.html("");
      $.each(data, function () {
        let option = $("<option />")
          .val(this.portfolio_id)
          .text(this.portfolio_nameshort +" - "+ this.portfolio_code);
        portfolio.append(option);
      });
      portfolio.trigger("change");
    });

    // EVENT ON CHANGED
    portfolio.on("change", function () {
      // console.log(this.value);
      $.getJSON(getUrl("api/mobc_product_search_account"), {
        portfolio_id: this.value,
        account_type: "S",
      }).done(function (data) {
        console.log("success: api/mobc_product_search_account");
        // console.log(data);
        account_id.html('');
        $.each(data, function () {
          let option = $("<option />")
            .val(this.account_id)
            .text(this.account_name + " - " + this.account_no);
          account_id.append(option);
        });
        account_id.trigger("change");
      });
    });

    account_id.on("change", function () {
      // console.log(this.value, "account_id");
      // console.log(portfolio.val(), "portfolio");

      $.getJSON(getUrl("api/market_company_load"), {
        company_id: this.value,
      }).done(function (data) {
        console.log("success: api/market_company_load");
        // console.log(data);
        // console.log(data[0].company_name);
        $("#bank_name").text(data[0].company_name);
      });

      $.getJSON(getUrl("api/mobc_product_search_account"), {
        portfolio_id: portfolio.val(),
        account_type: "S",
        account_id: this.value,
      }).done(function (data) {
        console.log("success: api/mobc_product_search_account");
        // console.log(data);

        $.getJSON(getUrl("api/parameter_ccy"), {
          ccy_id: data[0].ccy_id,
        }).done(function (data) {
          console.log("success: api/parameter_ccy");
          // console.log(data);
          $("#currency").text(data[0].ccy + " - " + data[0].ccy_description);
        });

        $("input[name=account_id]").val(data[0].account_id);
        $("input[name=bank_id]").val(data[0].bank_id);
        $("#account_no").text(data[0].account_no);
        $("#account_name").text(data[0].account_name);
        $("input[name=order_amount]").val(data[0].min_subs);
      });
      
    });

    // FORM SUBSCRIBE
    $("#hidden-panel-2 > div > div > form").submit(function (e) {
      e.preventDefault();
      console.log($(this).serialize4post());

      $.post(getUrl("api/subscribe_add"), $(this).serialize4post())
        .done(function (data) {
          console.log("success");
          console.log(data);
          alert(data);
          window.location.reload();
        })
        .fail(function (res) {
          let error = JSON.parse(res.responseText);
          console.log("fail");
          console.log(error);
          alert(error.message);
        });
    });


    // TABLE LIST
    let fileUpload = $("#wrapTransaksi > table > tbody > tr > td.wrapuUploadBtn > input[type=file]");
    fileUpload.change(function () {
      let order_id = $(this).closest("td").data("id");
      // console.log("order_id", order_id);
      var file_data = $(this).prop("files")[0];
      // console.log(file_data);

      var file_data = $(this).prop("files")[0];
      var form_data = new FormData();
      form_data.append("user_file", file_data);
      form_data.append("order_id", order_id);
      // alert(form_data);
      $.ajax({
        type: "post",
        url: getUrl("api/subscribe_upload"),
        // dataType: "text", // <-- what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
      })
        .done(function (data) {
          console.log("success");
          console.log(data);
          alert(data);
          window.location.reload();
        })
        .fail(function (res) {
          let error = JSON.parse(res.responseText);
          console.log("fail");
          console.log(error);
          alert(error.message);
        });
    });

    $("button.btnCancel").on("click", function (e) {
      e.preventDefault();

      let order_id = $(this).closest("td").data("id");
      console.log("order_id", order_id);
      // alert(order_id);
      if (confirm("Anda ingin membatalkan transaksi ini ?")) {
        $.post(getUrl("api/subscribe_cancel"), { order_id: order_id })
          .done(function (data) {
            console.log("success");
            console.log(data);
            alert(data);
            window.location.reload();
          })
          .fail(function (res) {
            let error = JSON.parse(res.responseText);
            console.log("fail");
            console.log(error);
            alert(error.message);
          });
      }
    });
  });
});

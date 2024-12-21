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

    var dateFormat = "mm/dd/yyyy",
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

  jQuery(function () {
    jQuery('#entryRedeem input[type="radio"]').on("click", function () {
      if (jQuery(this).val() == "1") {
        jQuery("#order_amount").prop("disabled", false);
        jQuery("#order_unit").prop("disabled", true).val("");
      } else if (jQuery(this).val() == "2") {
        jQuery("#order_unit").prop("disabled", false);
        jQuery("#order_amount").prop("disabled", true).val("");
      } else {
        jQuery("#order_amount").prop("disabled", true).val("");
        jQuery("#order_unit").prop("disabled", true).val("");
      }
    });
  });

  jQuery("#allNilaiRedemption").prop("checked", true);
  jQuery("#order_amount").prop("disabled", true).val("");
  jQuery("#order_unit").prop("disabled", true).val("");

  jQuery("#terms").click(function () {
    if (jQuery("#terms:checked").length) {
      jQuery("#entryRedBtn input[type=submit]").removeAttr("disabled");
    } else {
      jQuery("#entryRedBtn input[type=submit]").attr("disabled", "disabled");
    }
  });

  jQuery(".divTableCell:contains('\u00a0')").addClass("spaceblank");

  jQuery(function ($) {
    // ELEMENT
    let ifua_id = $("select[name=ifua_id");
    let portfolio_id = $("select[name=portfolio_id");
    let account_id = $("select[name=account_id");

    // LOADING DATA
    $.getJSON(getUrl("api/ifua_list"), {}).done(function (data) {
      console.log("success: api/ifua_list");
      // console.log(data);

      ifua_id.html("");
      $.each(data, function () {
        let option = $("<option />")
          .val(this.ifua_id)
          .text(this.identity_no + " - " + this.client_name);
        ifua_id.append(option);
      });
      ifua_id.trigger("change");

      $("input[name=client_id]").val(data[0].client_id);
      $("input[name=identity_id]").val(data[0].identity_id);

      $.getJSON(getUrl("api/portfolio_client_list"), {
        client_id: data[0].client_id,
      }).done(function (data) {
        console.log("success: api/portfolio_client_list");
        // console.log(data);

        portfolio_id.html("");
        $.each(data, function () {
          let option = $("<option />")
            .val(this.portfolio_id)
            .text(this.portfolio_nameshort + " - " + this.portfolio_code);
          portfolio_id.append(option);
        });
      });
    });

    $.getJSON(getUrl("api/client_bank_account"), {}).done(function (data) {
      console.log("success: api/client_bank_account");
      // console.log(data);

      account_id.html("");
      $.each(data, function () {
        let option = $("<option />")
          .val(this.account_id)
          .text(this.account_no + " - " + this.account_name);
        account_id.append(option);
      });
      account_id.trigger("change");
    });

    // EVENT ON CHANGED
    ifua_id.on("change", function () {
      console.log("ifua_id", this.value);

      $.getJSON(getUrl("api/ifua_list"), { ifua_id: this.value }).done(
        function (data) {
          console.log("success: api/ifua_list");
          // console.log(data);

          $("input[name=client_id]").val(data[0].client_id);
          $("input[name=identity_id]").val(data[0].identity_id);
        }
      );
    });

    account_id.on("change", function () {
      console.log("account_id", this.value);

      $.getJSON(getUrl("api/client_bank_account"), {
        account_id: this.value,
      }).done(function (data) {
        console.log("success: api/client_bank_account");
        // console.log(data);

        $("#bank_name").text(data[0].bank_name);
        $("#bank_branch").text(data[0].bank_branch);
        $("#account_no").text(data[0].account_no);
        $("#account_name").text(data[0].account_name);

        $.getJSON(getUrl("api/parameter_ccy"), {
          ccy_id: data[0].ccy_id,
        }).done(function (data) {
          console.log("success: api/parameter_ccy");
          // console.log(data);
          $("#currency").text(data[0].ccy + " - " + data[0].ccy_description);
        });
      });
    });

    // FORM REDEMPTION
    $("#hidden-panel-2 > div > div > form").submit(function (e) {
      e.preventDefault();
      console.log($(this).serialize4post());

      $.post(getUrl("api/redeem_add"), $(this).serialize4post())
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
    let fileUpload = $("#wrapTransaksi > tbody > tr > td.wrapuUploadBtn > input[type=file]");
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
        url: getUrl("api/redeem_upload"),
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
        $.post(getUrl("api/redeem_cancel"), { order_id: order_id })
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

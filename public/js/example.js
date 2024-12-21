(function ($) {
  ("use strict");

  // Form Serialize For GET Request
  //
  $.fn.serialize4get = function (type) {
    var o = {};
    // Exclude Select Element
    var a = this.find("[name]").not("select").serializeArray();
    $.each(a, function (i, v) {
      v.value = v.value == "on" ? "1" : v.value;
      o[v.name] = o[v.name] ? o[v.name] || v.value : v.value;
    });
    // Only Select Element
    var a = this.find("select").serializeArray();
    $.each(a, function (i, v) {
      if (o[v.name]) {
        o[v.name] += "," + v.value;
      } else {
        o[v.name] = v.value;
      }
    });
    return o;
  };

  // Form Serialize For POST Request
  //
  $.fn.serialize4post = function () {
    var o = {};
    // Exclude Select Element
    var a = this.find("[name]").not("select").serializeArray();
    $.each(a, function (i, v) {
      v.value = v.value == "on" ? "1" : v.value;
      o[v.name] = o[v.name] ? o[v.name] || v.value : v.value;
    });
    // Select Element
    var a = this.find("select").serializeArray();
    $.each(a, function (i, v) {
      if (o[v.name]) {
        o[v.name] += "," + v.value;
      } else {
        o[v.name] = v.value;
      }
    });
    return JSON.stringify(o);
  };
})(jQuery);

jQuery(function ($) {
  if (getCookie("isSignin") == "1") {
    $(".item-107 a").text("Logout");
  } else {
    $(".item-107 a").text("Login");
  }

  $("#gohome.button").on("click", function (e) {
    e.preventDefault();

    window.location.href = getUrl("frontend");
  });

  jQuery(".item-107 a, #hidden-panel-1").on("click", function (e) {
    e.preventDefault();

    if (getCookie("isSignin") == "1") {
      if (confirm("Do you want to Logout ?")) {
        $.post(getUrl("api/signout"), $(this).serialize4post())
          .done(function (data) {
            console.log(data);
            alert(data);
            window.location.href = getUrl("frontend");
          })
          .fail(function (res) {
            let error = JSON.parse(res.responseText);
            console.log(error.message);
            alert(error.message);
          });
      }
    } else {
      jQuery("#hidden-panel-1").toggleClass("display").removeClass("showall");
    }
    return;
  });

  $("#login > form").submit(function (e) {
    e.preventDefault();

    $.post(getUrl("api/signin"), $(this).serialize4post())
      .done(function (data) {
        console.log(data);
        alert(data);
        $("#hidden-panel-1").toggleClass("display").removeClass("showall");
        window.location.href = getUrl("frontend");
      })
      .fail(function (res) {
        let error = JSON.parse(res.responseText);
        console.log(error.message);
        alert(error.message);
      });
  });

});

function insertURLParam(key, value) {
  key = encodeURI(key);
  value = encodeURI(value);

  var kvp = document.location.search.substr(1).split("&");

  var i = kvp.length;
  console.log(i);
  var x;
  while (i--) {
    x = kvp[i].split("=");

    if (x[0] == key) {
      x[1] = value;
      kvp[i] = x.join("=");
      break;
    }
  }

  if (i < 0) {
    kvp[kvp.length] = [key, value].join("=");
  }

  /* this will reload the page, it's likely better to store this until finished */
  /* document.location.search = kvp.join('&');  */
  return kvp.join("&");
}

function getURLParam(name) {
  return (
    decodeURIComponent(
      (new RegExp("[?|&]" + name + "=" + "([^&;]+?)(&|#|;|$)").exec(
        location.search
      ) || [, ""])[1].replace(/\+/g, "%20")
    ) || null
  );
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
    user = prompt("Please enter your name:", "");
    if (user != "" && user != null) {
      setCookie("username", user, 365);
    }
  }
}

function getUrl(path) {
  return decodeURIComponent(getCookie("base_url")) + path;
}

function getToken() {
  return decodeURIComponent(getCookie("token"));
}

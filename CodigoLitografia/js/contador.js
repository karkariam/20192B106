/*$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000, 
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});*/

/*--------------------------------------------------------------------
 *Efecto visual de JQuery de carga falsa.
 *JAVASCRIPT "FakeLoader.js"
 *Version:    1.1.0 - 2014
 *website:    http://www.joaopereira.pt
 *Licensed MIT 
-----------------------------------------------------------------------*/
(function($) {
  $.fn.fakeLoader = function(options) {
    //Defaults
    var settings = $.extend(
      {
        timeToHide: 1200, // Default Time to hide fakeLoader
        pos: "fixed", // Default Position
        top: "0px", // Default Top value
        left: "0px", // Default Left value
        width: "100%", // Default width
        height: "100%", // Default Height
        zIndex: "999", // Default zIndex
        bgColor: "#2ecc71", // Default background color
        spinner: "spinner7", // Default Spinner
        imagePath: "" // Default Path custom image
      },
      options
    );

    //Customized Spinners
    var spinner01 =
      '<div class="fl spinner1"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>';
    var spinner02 =
      '<div class="fl spinner2"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div>';
    var spinner03 =
      '<div class="fl spinner3"><div class="dot1"></div><div class="dot2"></div></div>';
    var spinner04 = '<div class="fl spinner4"></div>';
    var spinner05 =
      '<div class="fl spinner5"><div class="cube1"></div><div class="cube2"></div></div>';
    var spinner06 =
      '<div class="fl spinner6"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div>';
    var spinner07 =
      '<div class="fl spinner7"><div class="circ1"></div><div class="circ2"></div><div class="circ3"></div><div class="circ4"></div></div>';

    //The target
    var el = $(this);

    //Init styles
    var initStyles = {
      position: settings.pos,
      width: settings.width,
      height: settings.height,
      top: settings.top,
      left: settings.left
    };

    //Apply styles
    el.css(initStyles);

    //Each
    el.each(function() {
      var a = settings.spinner;
      //console.log(a)
      switch (a) {
        case "spinner1":
          el.html(spinner01);
          break;
        case "spinner2":
          el.html(spinner02);
          break;
        case "spinner3":
          el.html(spinner03);
          break;
        case "spinner4":
          el.html(spinner04);
          break;
        case "spinner5":
          el.html(spinner05);
          break;
        case "spinner6":
          el.html(spinner06);
          break;
        case "spinner7":
          el.html(spinner07);
          break;
        default:
          el.html(spinner01);
      }

      //Add customized loader image

      if (settings.imagePath != "") {
        el.html('<div class="fl"><img src="' + settings.imagePath + '"></div>');
      }
      centerLoader();
    });

    //Time to hide fakeLoader
    setTimeout(function() {
      $(el).fadeOut();
    }, settings.timeToHide);

    //Return Styles
    return this.css({
      backgroundColor: settings.bgColor,
      zIndex: settings.zIndex
    });
  }; // End Fake Loader

  //Center Spinner
  function centerLoader() {
    var winW = $(window).width();
    var winH = $(window).height();

    var spinnerW = $(".fl").outerWidth();
    var spinnerH = $(".fl").outerHeight();

    $(".fl").css({
      position: "absolute",
      left: winW / 2 - spinnerW / 2,
      top: winH / 2 - spinnerH / 2
    });
  }

  $(window).load(function() {
    centerLoader();
    $(window).resize(function() {
      centerLoader();
    });
  });
})(jQuery);

$(function() {
  var selectedClass = "";
  $(".filter").click(function() {
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div")
      .not("." + selectedClass)
      .fadeOut()
      .removeClass("animation");
    setTimeout(function() {
      $("." + selectedClass)
        .fadeIn()
        .addClass("animation");
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
});

/*--------------------------------------------------------------------
Cookie que recuerda el nombre del usuario, contador de visitas
y último acceso.
-----------------------------------------------------------------------*/
//  Inicio -->
var expDays = 30;
var exp = new Date();
exp.setTime(exp.getTime() + expDays * 24 * 60 * 60 * 1000);
function Who(info) {
  var VisitorName = GetCookie("VisitorName");
  if (VisitorName == null) {
    VisitorName = prompt("¿Cúál es tu nombre?");
    SetCookie("VisitorName", VisitorName, exp);
  }
  return VisitorName;
}

function When(info) {
  var rightNow = new Date();
  var WWHTime = 0;
  WWHTime = GetCookie("WWhenH");
  WWHTime = WWHTime * 1;
  var lastHereFormatting = new Date(WWHTime);
  var intLastVisit =
    lastHereFormatting.getYear() * 10000 +
    lastHereFormatting.getMonth() * 100 +
    lastHereFormatting.getDate();
  var lastHereInDateFormat = "" + lastHereFormatting;
  var dayOfWeek = lastHereInDateFormat.substring(0, 3);
  var dateMonth = lastHereInDateFormat.substring(4, 11);
  var timeOfDay = lastHereInDateFormat.substring(11, 16);
  var year = lastHereInDateFormat.substring(23, 25);
  var WWHText = dateMonth + " del " + timeOfDay;
  SetCookie("WWhenH", rightNow.getTime(), exp);
  return WWHText;
}

function Count(info) {
  var WWHCount = GetCookie("WWHCount");
  if (WWHCount == null) {
    WWHCount = 1;
  } else {
    WWHCount++;
  }
  SetCookie("WWHCount", WWHCount, exp);
  return WWHCount;
}

function set() {
  VisitorName = prompt("Who are you?");
  SetCookie("VisitorName", VisitorName, exp);
  SetCookie("WWHCount", 0, exp);
  SetCookie("WWhenH", 0, exp);
}

function getCookieVal(offset) {
  var endstr = document.cookie.indexOf(";", offset);
  if (endstr == -1) endstr = document.cookie.length;
  return unescape(document.cookie.substring(offset, endstr));
}
function GetCookie(name) {
  var arg = name + "=";
  var alen = arg.length;
  var clen = document.cookie.length;
  var i = 0;
  while (i < clen) {
    var j = i + alen;
    if (document.cookie.substring(i, j) == arg) return getCookieVal(j);
    i = document.cookie.indexOf(" ", i) + 1;
    if (i == 0) break;
  }
  return null;
}

function SetCookie(name, value) {
  var argv = SetCookie.arguments;
  var argc = SetCookie.arguments.length;
  var expires = argc > 2 ? argv[2] : null;
  var path = argc > 3 ? argv[3] : null;
  var domain = argc > 4 ? argv[4] : null;
  var secure = argc > 5 ? argv[5] : false;
  document.cookie =
    name +
    "=" +
    escape(value) +
    (expires == null ? "" : "; expires=" + expires.toGMTString()) +
    (path == null ? "" : "; path=" + path) +
    (domain == null ? "" : "; domain=" + domain) +
    (secure == true ? "; secure" : "");
}

function DeleteCookie(name) {
  var exp = new Date();
  exp.setTime(exp.getTime() - 1);
  var cval = GetCookie(name);
  document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
//  End -->

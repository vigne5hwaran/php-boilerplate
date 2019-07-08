// JavaScript Document
(function($) {
  "use strict";

  //calling foundation js
  $(document).foundation();

  //calling Brand Crousel
  $(".main-banner").owlCarousel({
    loop: true,
    margin: 5,
    responsiveClass: true,
    slideSpeed: 2000,
    nav: true,
    autoplay: true,
    responsiveRefreshRate: 200,
    rewind: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ]
      },
      600: {
        items: 1,
        nav: false,
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ]
      },
      1000: {
        items: 1,
        nav: true,
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ],
        loop: true
      }
    }
  });

  $(".testimonial-slid").owlCarousel({
    loop: true,
    responsiveClass: true,
    margin: 10,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        loop: true
      },
      600: {
        items: 1,
        loop: true
      },
      1000: {
        items: 1,
        loop: true
      }
    }
  });

  //Our Partners Crousel
  $(".partners").owlCarousel({
    loop: true,
    responsiveClass: true,
    margin: 10,
    autoplay: true,
    smartSpeed: 3000,
    slideSpeed: 60,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
        loop: true
      },
      600: {
        items: 5,
        loop: true
      },
      1000: {
        items: 5,
        loop: true
      }
    }
  });

  //Hover Effect
  $(".single-sub")
    .on("mouseenter", function() {
      $(this)
        .children(".submenu")
        .slideDown(400);
    })
    .on("mouseleave", function() {
      $(this)
        .children(".submenu")
        .slideUp(400);
    });

  //TwentyTwenty Plugin Starter.
  $(window).on("load", function() {
    $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty();
  });

  //Saying page loaded
  $(window).on("load", function() {
    $("body").addClass("loaded");
    $(".preloader").html("");
    $(".preloader").css("display", "none");
  });

  //Display Scroll Btn on 1000px
  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 1000) {
      $("#top").fadeIn();
    } else {
      $("#top").fadeOut();
    }
  });

  //scroll effect
  $("#top").on("click", function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  //Moving Top
  $("#top").on("click", function(event) {
    event.stopPropagation();
    var idTo = $(this).attr("data-atr");
    var Position = $("[id='" + idTo + "']").offset();
    $("html, body").animate({ scrollTop: Position }, "slow");
    return false;
  });
})(jQuery); //jQuery main function ends strict Mode on

(function(i, s, o, g, r, a, m) {
  i["GoogleAnalyticsObject"] = r;
  (i[r] =
    i[r] ||
    function() {
      (i[r].q = i[r].q || []).push(arguments);
    }),
    (i[r].l = 1 * new Date());
  (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m);
})(
  window,
  document,
  "script",
  "https://www.google-analytics.com/analytics.js",
  "ga"
);

ga("create", "UA-62711679-1", "auto");
ga("send", "pageview");

var isNS = navigator.appName == "Netscape" ? 1 : 0;

if (navigator.appName == "Netscape")
  document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

function mischandler() {
  return false;
}

function mousehandler(e) {
  var myevent = isNS ? e : event;
  var eventbutton = isNS ? myevent.which : myevent.button;
  if (eventbutton == 2 || eventbutton == 3) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;

document.onkeydown = function(e) {
  if (
    e.ctrlKey &&
    (e.keyCode === 67 ||
      e.keyCode === 86 ||
      e.keyCode === 85 ||
      e.keyCode === 117)
  ) {
    alert("not allowed");
    return false;
  } else {
    return true;
  }
};

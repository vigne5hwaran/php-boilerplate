
/*=============================================
TABLE OF CONTENTS
================================================
1. PRELOADER JS
2. JQUERY STICKY MENU
3. MENU JS
4. SECTIONS BACKGROUNDS
5. COUNTDOWN JS
6. HOME SLIDER JS
7. BLOG SLIDER JS
8. ABOUT SLIDER JS
9. PORTFOLIO SLIDER JS
10. SERVICE SLIDER JS
11. TEAM SLIDER JS
12. CLIENT SLIDER JS
13. WN SLIDER JS
14. VENOBOX JS
15. ACCORDION JS
16. DATEPICKER JS
17. WOW ANIMATION JS
18. MIXITUP JS

Table Of Contents end
================================================
*/

(function($) {
  "use strict";

  jQuery(document).on("ready", function() {
    /* 1. PRELOADER JS */

    $(window).on("load", function() {
      function fadeOut(el) {
        el.style.opacity = 0.4;
        var last;
        var tick = function() {
          el.style.opacity = +el.style.opacity - (new Date() - last) / 600;
          last = +new Date();
          if (+el.style.opacity > 0) {
            (window.requestAnimationFrame && requestAnimationFrame(tick)) ||
              setTimeout(tick, 100);
          } else {
            el.style.display = "none";
          }
        };
        tick();
      }
      var pagePreloaderId = document.getElementById("page-preloader");
      setTimeout(function() {
        fadeOut(pagePreloaderId);
      }, 1000);
    });

    /* 2. JQUERY STICKY MENU */

    $(".sticky-menu").sticky({
      topSpacing: 0
    });

    /* 3. MENU JS */

    $("nav#dropdown").meanmenu({
      meanMenuContainer: ".mobile-menu-area",
      meanScreenWidth: "991"
    });

    $(window).on("scroll", function() {
      if ($(this).scrollTop() > 200) {
        $(".mainmenu-area").addClass("menu-animation");
      } else {
        $(".mainmenu-area").removeClass("menu-animation");
      }
    });

    $("a.js-scroll-trigger").on("click", function(e) {
      var anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $(anchor.attr("href")).offset().top - 48
          },
          1000
        );
      e.preventDefault();
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
      target: ".mainmenu-area",
      offset: 54
    });

    /* 4. SECTIONS BACKGROUNDS */

    var pageSection = $("section,div");
    pageSection.each(function(indx) {
      if ($(this).attr("data-background")) {
        $(this).css(
          "background-image",
          "url(" + $(this).data("background") + ")"
        );
      }
    });

    /* 5. COUNTDOWN JS */

    $(".counter-section").on("inview", function(
      event,
      visible,
      visiblePartX,
      visiblePartY
    ) {
      if (visible) {
        $(this)
          .find(".timer")
          .each(function() {
            var $this = $(this);
            $({
              Counter: 0
            }).animate(
              {
                Counter: $this.text()
              },
              {
                duration: 2000,
                easing: "swing",
                step: function() {
                  $this.text(Math.ceil(this.Counter));
                }
              }
            );
          });
        $(this).unbind("inview");
      }
    });
    /* END COUNTDOWN JS */

    /* 6. HOME SLIDER JS */

    $(".home-slides").owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 4000,
      animateIn: "fadeInLeft",
      animateOut: "fadeOutRight",
      dots: true,
      items: 1,
      nav: true,
      navText: [
        "<i class='icofont icofont-long-arrow-left'></i> PREV",
        "NEXT <i class='icofont icofont-long-arrow-right'></i>"
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        600: {
          items: 1,
          nav: false
        },
        768: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    });

    $(".home-slides").on("translate.owl.carousel", function() {
      $(this)
        .find(".owl-item .home-single-slide-dec > *")
        .removeClass("fadeInUp animated")
        .css("opacity", "0");
    });

    $(".home-slides").on("translated.owl.carousel", function() {
      $(this)
        .find(".owl-item .home-single-slide-dec > *")
        .addClass("fadeInUp animated")
        .css("opacity", "1");
    });

    var dot = $(".home-slides .owl-dot");
    dot.each(function() {
      var index = $(this).index() + 1;
      if (index < 10) {
        $(this)
          .html("0")
          .append(index);
      } else {
        $(this).html(index);
      }
    });

    /* 7. BLOG SLIDER JS */

    $(".single-blog-slider").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3500,
      animateIn: "fadeInLeft",
      animateOut: "fadeOutRight",
      dots: true,
      items: 1,
      nav: false
    });

    var dot = $(".single-blog-slider .owl-dot");
    dot.each(function() {
      var index = $(this).index() + 1;
      if (index < 10) {
        $(this)
          .html("0")
          .append(index);
      } else {
        $(this).html(index);
      }
    });

    /* 8. ABOUT SLIDER JS */

    $(".about-slider").owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 4000,
      dots: false,
      items: 1,
      animateIn: "fadeInDown",
      animateOut: "fadeOutDown",
      nav: true,
      navText: [
        "<i class='icofont icofont-thin-left'></i>",
        "<i class='icofont icofont-thin-right'></i>"
      ]
    });

    /* 9. PORTFOLIO SLIDER JS */

    $(".portfolio-slider").owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 4000,
      navSpeed: 700,
      dotsSpeed: 700,
      dragEndSpeed: 1000,
      dots: false,
      nav: true,
      navText: [
        "<i class='icofont icofont-thin-left'></i>",
        "<i class='icofont icofont-thin-right'></i>"
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        768: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    });

    /* 10. SERVICE SLIDER JS */

    $(".service-slider").owlCarousel({
      loop: true,
      margin: 30,
      autoplay: false,
      autoplayTimeout: 4000,
      navSpeed: 700,
      dotsSpeed: 700,
      dragEndSpeed: 1000,
      dots: false,
      nav: true,
      navText: [
        "<i class='icofont icofont-thin-left'></i>",
        "<i class='icofont icofont-thin-right'></i>"
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });

    /* 11. TEAM SLIDER JS */

    $(".team-slider").owlCarousel({
      loop: true,
      margin: 30,
      autoplay: false,
      autoplayTimeout: 4000,
      navSpeed: 700,
      dotsSpeed: 700,
      dragEndSpeed: 1000,
      dots: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });

    /* 12. CLIENT SLIDER JS */

    $(".client-slider").owlCarousel({
      loop: true,
      margin: 30,
      autoplay: true,
      autoplayTimeout: 3500,
      items: 5,
      dots: false,
      nav: false
    });

    /* 13. WN SLIDER JS */

    $(".single-wn-slider").owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 3000,
      items: 1,
      dots: false,
      nav: false,
      animateIn: "fadeInDown",
      animateOut: "fadeOutDown"
    });

    /* 14. VENOBOX JS */

    $(".venobox").venobox({
      numeratio: true,
      titleattr: "data-title",
      spinner: "cube-grid",
      spinColor: "#fff"
    });

    /* 15. ACCORDION JS  */

    var selectIds = $(
      "#panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#panel7,#panel8"
    );
    $(function($) {
      selectIds.on("show.bs.collapse hidden.bs.collapse", function() {
        $(this)
          .prev()
          .find(".icofont")
          .toggleClass("icofont-thin-down icofont-thin-right");
      });
    });

    /* 16. DATEPICKER JS  */

    $("#datepicker").datepicker({
      uiLibrary: "bootstrap4"
    });
  });

  /* 17. WOW ANIMATION JS */

  new WOW().init();

  /* 18. MIXITUP JS */

  $(".portfolio-items").mixItUp({
    load: {
      sort: "order:asc" /* default:asc */
    },
    animation: {
      effects: "fade rotateX(180deg)",
      /* fade scale */
      duration: 700 /* 600 */
    },
    selectors: {
      filter: ".filter" /* .filter */
    },
    callbacks: {
      onMixEnd: function(state) {
        console.log(state); /* null */
      }
    }
  });
})(jQuery);

/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

/* ========================================================================
 * Navigation Bar
 * ======================================================================== */

 $(document).ready(function(){
    $(".button a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});

/* ========================================================================
 * Sticky Header
 * ======================================================================== */

$(window).scroll(function() {
if ($(this).scrollTop() > 1){
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});

/* ========================================================================
 * Masonry
 * ======================================================================== */

$(document).ready(function(){
  $('.grid').masonry({
   // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });
});

/* ========================================================================
 * Featherlight
 * ======================================================================== */

 $(document).ready(function(){
   $('a.portfolio-gallery').featherlightGallery({
     gallery: {
         fadeIn: 300
     },
     openSpeed: 300
   });
 });

/* ========================================================================
 * Overlay-resize
 * ======================================================================== */

// function Overlay() {
//     $('.portfolio-item-overlay').css({
//       height: $('.portfolio-item').height()
//   });
// }
// Overlay();

// $('.portfolio-item-overlay').find('img').on('load', resizeOverlay);

/* ========================================================================
 * Slider
 * ======================================================================== */

$(document).ready(function(){
   $('#logo').fadeTo('fast', 0.8);
   $('#logo').delay(2000).fadeTo('slow', 0);
   $('#text').delay(2500).fadeTo('slow', 1.0);
 });

$(document).ready(function(){
   $('#show').delay(2500).fadeTo('slow', 1);
 });

$(document).ready(function(){
  var container = document.getElementById("hero");
  var inner = document.getElementById("video-overlay");
  var inHeight = inner.offsetHeight;
  container.style.height=(window.innerHeight);
  container.style.width=window.innerWidth;
  var conHeight=(container.offsetHeight);
  inner.style.marginTop = (conHeight-inHeight) /2 + 'px';
});

// $(document).ready(function() {
//   $("#show").click(function() {
//       $('html,body').animate({
//         var nav = document.getElementById("#menu-main-menu");
//         var navHeight = nav.height();
//           scrollTop: $(".main").offset().top - navHeight()
//         }, 1200, 'swing');
//   });
// });

$(document).ready(function() {
$("#show").on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(".main").offset().top - $('#container-space').height()
    }, 1200, 'swing' );
});
});

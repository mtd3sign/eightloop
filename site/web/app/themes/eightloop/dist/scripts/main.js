!function(o){var e={common:{init:function(){},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}}},n={fire:function(o,n,i){var t,a=e;n=void 0===n?"init":n,t=""!==o,t=t&&a[o],t=t&&"function"==typeof a[o][n],t&&a[o][n](i)},loadEvents:function(){n.fire("common"),o.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(o,e){n.fire(e),n.fire(e,"finalize")}),n.fire("common","finalize")}};o(document).ready(n.loadEvents)}(jQuery),$(document).ready(function(){$(".button a").click(function(){$(".overlay").fadeToggle(200),$(this).toggleClass("btn-open").toggleClass("btn-close")})}),$(".overlay").on("click",function(){$(".overlay").fadeToggle(200),$(".button a").toggleClass("btn-open").toggleClass("btn-close"),open=!1}),$(window).scroll(function(){$(this).scrollTop()>1?$("header").addClass("sticky"):$("header").removeClass("sticky")});var $grid=$(".grid").masonry({itemSelector:".grid-item",columnWidth:".grid-sizer",percentPosition:!0,isAnimated:!0,isFitWidth:!0});$grid.imagesLoaded().progress(function(){$grid.masonry("layout")});var $grid=$(".masonry-grid").masonry({itemSelector:".masonry-portfolio-item",columnWidth:".masonry-portfolio-sizer",percentPosition:!0,isAnimated:!0,isFitWidth:!0});$grid.imagesLoaded().progress(function(){$grid.masonry("layout")}),$(document).ready(function(){$("a.portfolio-gallery").featherlightGallery({gallery:{fadeIn:300},openSpeed:300})}),$(document).ready(function(){$("#logo").fadeTo("fast",.8),$("#logo").delay(2e3).fadeTo("slow",0),$("#text").delay(2500).fadeTo("slow",1)}),$(document).ready(function(){$("#show").delay(2500).fadeTo("slow",1)}),$(document).ready(function(){var o=document.getElementById("hero"),e=document.getElementById("video-overlay"),n=e.offsetHeight;o.style.height=window.innerHeight,o.style.width=window.innerWidth;var i=o.offsetHeight;e.style.marginTop=(i-n)/2+"px"}),$(document).ready(function(){$("#show").on("click",function(o){o.preventDefault(),$("html, body").animate({scrollTop:$(".main").offset().top-$("#container-space").height()},1200,"swing")})});
//# sourceMappingURL=main.js.map

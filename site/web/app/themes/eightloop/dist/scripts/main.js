!function(o){var e={common:{init:function(){},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}}},i={fire:function(o,i,t){var n,a=e;i=void 0===i?"init":i,n=""!==o,n=n&&a[o],n=n&&"function"==typeof a[o][i],n&&a[o][i](t)},loadEvents:function(){i.fire("common"),o.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(o,e){i.fire(e),i.fire(e,"finalize")}),i.fire("common","finalize")}};o(document).ready(i.loadEvents)}(jQuery),$(document).ready(function(){$(".button a").click(function(){$(".overlay").fadeToggle(200),$(this).toggleClass("btn-open").toggleClass("btn-close")})}),$(".overlay").on("click",function(){$(".overlay").fadeToggle(200),$(".button a").toggleClass("btn-open").toggleClass("btn-close"),open=!1}),$(window).scroll(function(){$(this).scrollTop()>1?$("header").addClass("sticky"):$("header").removeClass("sticky")});var $grid=$(".grid").masonry({itemSelector:".grid-item",columnWidth:".grid-sizer",percentPosition:!0,isAnimated:!0,isFitWidth:!0});$grid.imagesLoaded().progress(function(){$grid.masonry("layout")});var $grid=$(".grid-portfolio").masonry({itemSelector:".grid-item-portfolio",columnWidth:".grid-sizer-portfolio",percentPosition:!0,isAnimated:!0,isFitWidth:!0});$grid.imagesLoaded().progress(function(){$grid.masonry("layout")}),$(document).ready(function(){$("a.portfolio-gallery").featherlightGallery({gallery:{fadeIn:300},openSpeed:300})}),$(document).ready(function(){$("#logo").fadeTo("fast",.8),$("#logo").delay(2e3).fadeTo("slow",0),$("#text").delay(2500).fadeTo("slow",1)}),$(document).ready(function(){$("#show").delay(2500).fadeTo("slow",1)}),$(document).ready(function(){var o=document.getElementById("hero"),e=document.getElementById("video-overlay"),i=e.offsetHeight;o.style.height=window.innerHeight,o.style.width=window.innerWidth;var t=o.offsetHeight;e.style.marginTop=(t-i)/2+"px"}),$(document).ready(function(){$("#show").on("click",function(o){o.preventDefault(),$("html, body").animate({scrollTop:$(".main").offset().top-$("#container-space").height()},1200,"swing")})});
//# sourceMappingURL=main.js.map

jQuery(document).ready(function(e){"use strict";var a=e(window);a.on("load",function(){e("#pre_loader").addClass("down"),d()}),e(".screen-height").css({height:window.innerHeight}),a.resize(function(){e(".screen-height").css({height:window.innerHeight})}),e("#top-bar #forms").on("click",function(){e("#top-bar .forms").hasClass("active")?e("#top-bar .forms").removeClass("active"):e("#top-bar .login-form").addClass("active")}),e("#top-bar .register").on("click",function(){e("#top-bar .login-form").removeClass("active"),e("#top-bar .register-form").addClass("active")}),e("#top-bar .login").on("click",function(){e("#top-bar .register-form ").removeClass("active"),e("#top-bar .login-form").addClass("active")}),e(".skill").each(function(){e(this).appear(function(){e(this).find(".skill-box").animate({width:jQuery(this).attr("data-percent")},1e3)})}),e(".zoom").elevateZoom({zoomType:"inner",cursor:"crosshair",zoomWindowFadeIn:500,zoomWindowFadeOut:750}),e("input[name='demo_vertical']").TouchSpin({verticalbuttons:!0}),e(".team-slider").owlCarousel({itemsCustom:[[0,1],[450,1],[600,2],[700,2],[1e3,3],[1200,4],[1400,4],[1600,4]],navigation:!0,pagination:!1,autoPlay:!0,navigationText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']}),e(".service-slider").owlCarousel({itemsCustom:[[0,1],[450,1],[600,2],[700,2],[1e3,3],[1200,4],[1400,4],[1600,4]],navigation:!1,pagination:!1,autoPlay:!0,navigationText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']}),e(".logo-slider").owlCarousel({itemsCustom:[[0,1],[450,1],[600,2],[700,3],[1e3,4],[1200,6],[1400,6],[1600,6]],navigation:!1,pagination:!1,autoPlay:!0,navigationText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']}),e("html, body").scrollTop(0),a.on("load",function(){setTimeout(function(){e("html, body").scrollTop(0)},0)}),e(".accordion .panel").on("click",function(a){a.preventDefault();var i=e(this);e(".accordion .panel").removeClass("active"),i.addClass("active")}),e(window).stellar({responsive:!0,horizontalScrolling:!1,hideDistantElements:!1,horizontalOffset:0,verticalOffset:0});var i=e("#submit_contact"),o=e("#msg");i.on("click",function(a){a.preventDefault();var i=e(this);e.ajax({type:"POST",url:"contact.php",dataType:"json",cache:!1,data:e("#contact-form").serialize(),success:function(e){"error"!==e.info?(i.parents("form").find("input[type=text],textarea,select").filter(":visible").val(""),o.hide().removeClass("success").removeClass("error").addClass("success").html(e.msg).fadeIn("slow").delay(5e3).fadeOut("slow")):o.hide().removeClass("success").removeClass("error").addClass("error").html(e.msg).fadeIn("slow").delay(5e3).fadeOut("slow")}})});var t=new Date,n=t.getMonth(),s=t.getFullYear(),r=new Date(s,n,5);e("form .date").datepicker("setDate",r),e(".testi-slider,.feature-post-slider").owlCarousel({navigation:!1,slideSpeed:300,paginationSpeed:400,singleItem:!0,pagination:!0,autoPlay:!0,navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']}),e(".counter-block").each(function(){e(this).appear(function(){var a=e(this),i=a.find(".odometer");window.setTimeout(function(){i.html(a.attr("data-count"))},500)})});var l=e(".animate-in"),c=a.height();e(document).height();function d(){var i=a.scrollTop();l.each(function(){var a=e(this),o=a.offset().top;i>o-.99999*c?a.addClass("animated"):a.removeClass("animated")})}a.scroll(function(){d()}),a.width()<=767&&(e("#slide-nav #menu_nav ul > li.dropdown").append('<div class="more"></div>'),e("#slide-nav #menu_nav").on("click",".more",function(a){a.stopPropagation(),e(this).parent().toggleClass("current").children("#slide-nav #menu_nav ul > li.dropdown > ul").toggleClass("open")})),a.resize(function(){window.innerWidth>767?0!==e("#slide-nav #menu_nav ul > li.dropdown .more").length&&e("#slide-nav #menu_nav ul > li.dropdown div").remove(".more"):e("#slide-nav #menu_nav ul > li.dropdown").append('<div class="more"></div>')});var f=e("body"),u=e(".body-innerwrapper"),v=e(".navbar-toggle"),m=e(".closs"),p=e(".navbar-collapse");v.on("click",function(e){e.preventDefault(),w(e),setTimeout(g,50)}),m.on("click",function(e){e.preventDefault(),h()});var g=function(){f.addClass("offcanvas"),u.on("click",h),m.on("click",h),p.on("click",w)},h=function(){f.removeClass("offcanvas"),u.off("click",h),m.off("click",h),p.off("click",w)},w=function(e){return e.stopPropagation(),!0};e("nav").wrap('<div class="place-holder"></div>'),e(".place-holder").height(e("nav").outerHeight()),e(".bucket-area").on("click",function(){e(".item-area").toggleClass("slideEff")}),e(".error-msg").delay(3e3).fadeOut(1e3)});
$(document).ready(function(){function t(t){var o=$("#post-model");$.ajax({type:"GET",url:siteUrl+"/wp-json/wp/v2/posts/"+t,dataType:"json",success:function(t){post_data=t,console.log(post_data);var e=post_data.title.rendered,s=post_data.content.rendered,n=post_data.link;o.find(".post-title").html(e),o.find(".post-content").html(s),window.history.pushState("post",e,n)}}),console.log(t)}if($("#instafeed").length){new Instafeed({get:"user",userId:"212129007",accessToken:"212129007.1677ed0.54011f83990548bc8070b30827050b3d",resolution:"standard_resolution",limit:30,template:'<div class="image-wrap"><a href="{{link}}"><img src="{{image}}"/></a><div class="caption">{{caption}}</div><div class="location">{{location}}</div></div>',after:function(){$(".instagram-carousel").owlCarousel({loop:!1,margin:20,responsiveClass:!0,stagePadding:30,nav:!0,responsive:{0:{items:1},600:{items:3},1e3:{items:5}}})}}).run()}$(".masonry").masonry({itemSelector:".columns",columnWidth:".columns"}),$(document).foundation(),$(".load-modal").on("click",function(o){o.preventDefault(),t($(this).data("post-id"))}),$(".close-button").on("click",function(t){window.history.pushState("post",siteTitle,siteUrl)})});
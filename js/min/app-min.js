$(document).ready(function(){if($("#instafeed").length){var e=new Instafeed({get:"user",userId:"212129007",accessToken:"212129007.1677ed0.54011f83990548bc8070b30827050b3d",resolution:"standard_resolution",limit:30,template:'<div class="image-wrap"><a href="{{link}}"><img src="{{image}}"/></a><div class="caption">{{caption}}</div><div class="location">{{location}}</div></div>',after:function(){$(".instagram-carousel").owlCarousel({loop:!1,margin:20,responsiveClass:!0,stagePadding:30,nav:!0,responsive:{0:{items:1},600:{items:3},1e3:{items:5}}})}});e.run()}$(document).foundation()});
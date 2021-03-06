$(document).ready(function(){

  if ( $('#instafeed').length) {

    var userFeed = new Instafeed({
      get: 'user',
      userId: '212129007',
      accessToken: '212129007.1677ed0.54011f83990548bc8070b30827050b3d',
      resolution: 'standard_resolution',
      limit: 30,
      template: '<div class="image-wrap"><a href="{{link}}"><img src="{{image}}"/></a><div class="caption">{{caption}}</div><div class="location">{{location}}</div></div>',
      after: function() {
        $('.instagram-carousel').owlCarousel({
            loop:false,
            margin:20,
            responsiveClass:true,
            stagePadding: 30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
      }
    });

    userFeed.run();

  }


  $('.masonry').masonry({
    // options
    itemSelector: '.columns',
    columnWidth: '.columns'
  });


// Initialise Foundation
  $(document).foundation();

// Ajax load lost with REST API

  // function loadContent(postID){
  //
  //   var $modal = $('#post-model');
  //
  //   $.ajax({
  //        type: 'GET',
  //        url: siteUrl + '/wp-json/wp/v2/posts/' + postID,
  //        dataType: 'json',
  //        success: function(data){
  //
  //        post_data = data;
  //       console.log(post_data);
  //
  //       var PostTitle = post_data.title.rendered;
  //       var PostContent = post_data.content.rendered;
  //       var PostLink = post_data.link;
  //
  //       console.log(PostTitle);
  //
  //       $modal.find('.post-title').html(PostTitle);
  //       $modal.find('.post-content').html(PostContent);
  //       $modal.find('.comment-link').attr("href", PostLink)
  //
  //       window.history.pushState('post', PostTitle, PostLink);
  //      }
  //     });
  //   console.log(postID);
  // }
  //
  // $('.load-modal').on('click', function(e) {
  //   e.preventDefault();
  //   var ajax_postId = $(this).data("post-id");
  //   loadContent(ajax_postId);
  // });
  //
  // $('.close-button').on('click', function(e) {
  //   window.history.pushState('post', siteTitle, siteUrl);
  // });

// Mobile image tile

window.ondevicemotion = function(event) {

	accX = Math.round(event.accelerationIncludingGravity.x) / 10;
	accY = Math.round(event.accelerationIncludingGravity.y) / 10;

	movement = 100;

	xA = -((accX * movement) + 100);
	yA = -(accY) * movement;

$('#mobile-header').css({'background-position' : xA+'px center'});

}

// Site Search

$(".site-search-link").click(function(event) {
  $(".search-model").show();
});

});

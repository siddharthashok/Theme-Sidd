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

  function loadContent(postID){

    var $modal = $('#post-model');

    $.ajax({
       type: 'GET',
       url: 'http://gby05.review/s-theme-wp/wp-json/wp/v2/posts/' + postID,
       dataType: 'json',
       success: function(data){
       // do something with the data here
       post_data = data;
        console.log(post_data.title.rendered);

        $modal.find('.post-content').html(post_data.content.rendered);
       }
      });
    console.log(postID);
  }

  $('.load-modal').on('click', function(e) {
    e.preventDefault();
    var ajax_postId = $(this).data("post-id");
    loadContent(ajax_postId);
  });




});

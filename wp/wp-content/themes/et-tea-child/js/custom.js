jQuery(function($){
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 1) {
      
      $(".site-header").addClass("is-sticky");
      $(".nav-primary").addClass("is-sticky");
      $(".menu-toggle").addClass("is-sticky");
    } else {
      $(".site-header").removeClass("is-sticky");
      $(".nav-primary").removeClass("is-sticky");
      $(".menu-toggle").removeClass("is-sticky");
    }
  })
})


/* 
Counter Up
*/
jQuery(function($){

  $('.counter').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });

});



jQuery(function($){ 


    var figure = $(".ws-intro-video").hover( hoverVideo, hideVideo );

    function hoverVideo(e) {  
        $('video', this).get(0).play(); 
    }

    function hideVideo(e) {
        $('video', this).get(0).pause(); 
    }

})



jQuery(function($){ 

  $( ".et-intro-item img" ).wrap("<div class='widget_sp_image'></div>");
  $( ".et-categories-item img" ).wrap("<div class='widget_sp_image'></div>");
  $( ".et-team-item img" ).wrap("<div class='widget_sp_image'></div>");
  $( "ul.products li.product img" ).wrap("<div class='wc-product-img'></div>");
  $('.yith-wcqv-button').attr('title','quick');

})


jQuery(function($){ 

 
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    
    $('.tab ul.tabs li a').click(function (g) { 
      var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();
      
      tab.find('ul.tabs > li').removeClass('current');
      $(this).closest('li').addClass('current');
      
      tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
      tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
      
      g.preventDefault();
    } );
})



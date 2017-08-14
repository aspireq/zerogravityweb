/*funny text*/
$(document).ready(function() {
    $('.started').funnyText({
        speed: 700,
        activeColor: '#37DEF1',
        color: '#3A5A9D',
        fontSize: '30px',
        direction: 'both'
    });
    $('.testimonial').funnyText({
        speed: 700,
        activeColor: '#37DEF1',
        color: '#3A5A9D',
        fontSize: '30px',
        direction: 'both'
    });
    $('.work').funnyText({
        speed: 700,
        activeColor: '#fff',
        color: '#37DEF1',
        fontSize: '30px',
        direction: 'both'
    });
});

/*main menu*/
$(document).ready(function(){
             
     $(".dropdown").hover(            
         function() {
             
             $(this).toggleClass('open');        
         },
         function() {
           
             $(this).toggleClass('open');       
         }
     );
 
     
     $('.dropdown-toggle').mouseover(function(){
 
         if ($(this).hasClass('mega-active')) return;
         $('.mega-active').removeClass('mega-active');
         $(this).addClass('mega-active');
         
     });
     
     $('.nav, .mega-dropdown-menu').mouseout(function(){
         if ( ($(".mega-active").length > 0) && ($(".open").length === 0) )
         {
             $('.mega-active').removeClass('mega-active');
         }
     });
     
 });

 /*scroll*/
$(document).ready(function() {

  $(function() {

      $(document).on('scroll', function() {

          if ($(window).scrollTop() > 100) {
              $('.scroll-top-wrapper').addClass('show');
          } else {
              $('.scroll-top-wrapper').removeClass('show');
          }
      });

      $('.scroll-top-wrapper').on('click', scrollToTop);
  });

  function scrollToTop() {
      verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
      element = $('body');
      offset = element.offset();
      offsetTop = offset.top;
      $('html, body').animate({
          scrollTop: offsetTop
      }, 500, 'linear');
  }

});

/*hosting tab*/
$(document).ready(function() {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {    
    var target = $(this).attr('href');

    $(target).css('left','-'+$(window).width()+'px');   
    var left = $(target).offset().left;
    $(target).css({left:left}).animate({"left":"0px"}, "10");
    })
});

/*portfolio*/
(function() {
    new Slideshow( document.getElementById( 'slideshow-1' ) );
    setTimeout( function() {
       new Slideshow( document.getElementById( 'slideshow-2' ) );
    }, 1750 );

    /* Mockup responsiveness */
    var body = docElem = window.document.documentElement,
       wrap = document.getElementById( 'wrap' ),
       mockup = wrap.querySelector( '.mockup' ),
       mockupWidth = mockup.offsetWidth;

    scaleMockup();

    function scaleMockup() {
       var wrapWidth = wrap.offsetWidth,
          val = wrapWidth / mockupWidth;

       mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
    }
    
    window.addEventListener( 'resize', resizeHandler );

    function resizeHandler() {
       function delayed() {
          resize();
          resizeTimeout = null;
       }
       if ( typeof resizeTimeout != 'undefined' ) {
          clearTimeout( resizeTimeout );
       }
       resizeTimeout = setTimeout( delayed, 50 );
    }

    function resize() {
       scaleMockup();
    }
 })();


 /*tooltip*/
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/*fixed header*/
$(window).load(function(){
  $("#sticky").sticky({ topSpacing: 0 });
});

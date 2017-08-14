
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

/*header-footer call*/
/*$(document).ready(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});*/
 
/*carousel*/

/*$(document).ready(function() {
    $('.carousel').carousel({
        interval: 7000,
        pause: false
    });

    $('.carousel').carousel('cycle');
});
*/
/*carousel height*/
/*if($(window).width() > 767){
    $(document).ready(function() {

        var $header = $('header');
        var ans = $(window).height() - $header.height() + 30;
        $(".slider-img").css("height", ans);
    });
}
if($(window).width() > 767){
    $(document).ready(function() {
        var ans = $(window).height();
        $(".subsliderimg").css("height", ans);
    });
}*/

/* Time Countdown 
-------------------------------------------------------------------*/
$('#time_countdown').countDown({

    // targetDate: {
    //     'day': 25,
    //     'month': 12,
    //     'year': 2016,
    //     'hour': 0,
    //     'min': 0,
    //     'sec': 0
    // },
    // omitWeeks: true

    targetOffset: {
        'day': 37,
        'month': 0,
        'year': 0,
        'hour': 0,
        'min': 0,
        'sec': 0
    },
    omitWeeks: true

});

/*menu*/

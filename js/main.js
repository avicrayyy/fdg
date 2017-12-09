$(document).ready(function(){


    var img = new Image();
    img.src = "../img/intro-bg.jpg";
    img.onload = function( ) {
        $('h1.brand-heading').css('display', 'none');
        $('h1.brand-heading').fadeIn(1000);
    }
    /*! Fades in intro on load */
        

        function collapseNavbar() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
            $(".navbar-custom a").addClass("font-gray");
            $(".logo").css("display", "none");
            $(".logo-c").css("display", "block");

        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
            $(".navbar-custom a").removeClass("font-gray");
            $(".logo").css("display", "block");
            $(".logo-c").css("display", "none");
        }
    }

    $(window).scroll(collapseNavbar);
    $(document).ready(collapseNavbar);

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $(".navbar-collapse").collapse('hide');
    });


     // portfolio
    $('.carousel-inner a').click(function() {
         var itemID = $(this).attr('href');
         $('.gallery ul').addClass('item_open');
         $(itemID).addClass('item_open');
         return false;
     });

     $('.gallery ul li a').click(function() {
         var itemID = $(this).attr('href');
         $('.gallery ul').addClass('item_open');
         $(itemID).addClass('item_open');
         return false;
     });
     $('.close').click(function() {
         $('.port, .gallery ul').removeClass('item_open');
         return false;
     });

     $(".gallery ul li a").click(function() {
         $('html, body').animate({
             scrollTop: parseInt($("#top").offset().top)
         }, 400);
     });

     // BACK TO TOP BUTTON

    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    // SMOOTH PAGE SCROLL

    $("a[href='#home']").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, "slow")
    });

    $("a[href='#gallery']").click(function() {
            $('html, body').animate({
                scrollTop: $("#gallery").offset().top
            }, "slow")
    });

    $("a[href='#contact']").click(function() {
            $('html, body').animate({
                scrollTop: $("#contact").offset().top
            }, "slow")
    });

     //for video bg-index
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
        
    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        //scaleBannerVideoSize('.video-container video');
    });
    //end of video bg-index 

    $("a.scrolly-mouse").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 500);
     });

        // PAUSE YOUTUBE WHEN OUT OF MODAL

    function toggleVideo(state) {
        // if state == 'hide', hide. Else: show video
        var div = document.getElementById("popupVid");
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        div.style.display = state == 'hide' ? '' : '';
        func = state == 'hide' ? 'pauseVideo' : 'playVideo';
         iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
     }

     function scaleVideoContainer() {

    var height = $(window).height();
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){
    
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        videoWidth,
        videoHeight;
    
    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) {
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else {
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        $(this).width(videoWidth).height(videoHeight);

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
        

    });
}

});
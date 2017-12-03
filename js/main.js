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

// PAUSE YOUTUBE WHEN OUT OF MODAL

function toggleVideo(state) {
    // if state == 'hide', hide. Else: show video
    var div = document.getElementById("popupVid");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    div.style.display = state == 'hide' ? '' : '';
    func = state == 'hide' ? 'pauseVideo' : 'playVideo';
     iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
 }

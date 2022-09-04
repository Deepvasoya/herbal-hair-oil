$(document).ready(function() {
    $(".scroll").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(".form_se").offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 1400);
        return false;
    });

    var w = window.innerWidth;
    if (w < 798) {
        $('.slide_mob').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            slidesToShow: 1,
            appendArrows: $('.speakers_navigations2 .arrows')
        });
        $('.thin').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            slidesToShow: 1,
            appendArrows: $('.speakers_navigations3 .arrows')
        });
        $('.slid').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            slidesToShow: 1,
            appendArrows: $('.speakers_navigations .arrows')
        });
    } else {
        $('.slid').slick({
            dots: true,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            slidesToShow: 1,
            appendArrows: $('.speakers_navigations .arrows')
        });
    }


});

$(document).ready(function () {
    $(document).on("click", ".notif-btn", function () {
        $(".notif-item").toggleClass('hide');
    });
    $('.nav').nav();
    $(".notif-flex .click").click(function () {
        $(".notif-flex").toggleClass('off');
    });
    $("#slide-down").click(function () {
        $(".notif-item").addClass('hide').addClass('slideInDown');
    });
    // $('.owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     responsiveClass: true,
    //     items: 1,
    // });

    jQuery(function ($) {

        var doAnimations = function () {
            var offset = $(window).scrollTop() + $(window).height(),
                $animatables = $('.animatable');
            if ($animatables.length == 0) {
                $(window).off('scroll', doAnimations);
            }
            $animatables.each(function (i) {
                var $animatable = $(this);
                if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                    $animatable.removeClass('animatable').addClass('animated');
                }
            });

        };

        $(window).on('scroll', doAnimations);
        $(window).trigger('scroll');

    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll_To_Top').fadeIn();
        }
        else {
            $('.scroll_To_Top').fadeOut();
        }
    });


    $('.scroll_To_Top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 700);
        return false;
    });


});



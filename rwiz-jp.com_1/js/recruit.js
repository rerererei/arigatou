$(function() {
    $('.to-button').click(function() {
        var adjust = 0;
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + adjust;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });

    $('.toroku-btn').click(function() {
        $(this).addClass('active');
        $('.jokin-btn').removeClass('active');

        $('.requruite-toroku').show();
        $('.toroku-arrow').show();
        $('.requruite-jokin').hide();
        $('.jokin-arrow').hide();
    });
    $('.jokin-btn').click(function() {
        $(this).addClass('active');
        $('.toroku-btn').removeClass('active');

        $('.requruite-jokin').show();
        $('.jokin-arrow').show();
        $('.requruite-toroku').hide();
        $('.toroku-arrow').hide();
    });
    $('.shintai-kaigo').click(function() {
        $(this).addClass('active');
        $('.seikatsu-enjo').removeClass('active');

        $('.shintai-detail').show();
        $('.seikatsu-detail').hide();
    });
    $('.seikatsu-enjo').click(function() {
        $(this).addClass('active');
        $('.shintai-kaigo').removeClass('active');

        $('.seikatsu-detail').show();
        $('.shintai-detail').hide();
    });
});


$(function() {
    var windowSize = $(window).width();

    if (windowSize < 700) {
        $('.spview').show();
        $('.pcview').hide();
    } else {
        $('.pcview').show();
        $('.spview').hide();
    }

    $(window).resize(function() {
        var windowSize = $(window).width();

        if (windowSize < 700) {
            $('.spview').show();
            $('.pcview').hide();
        } else {
            $('.pcview').show();
            $('.spview').hide();
        }
    });
});

$(function() {
    var windowSize = $(window).width();
    if (windowSize > 699) {
        var footerBtn = $('.footerFix');
        footerBtn.hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                footerBtn.fadeIn();
            } else {
                footerBtn.fadeOut();
            }
        });
    }
});
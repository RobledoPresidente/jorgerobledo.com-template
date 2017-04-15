$(function () {

    if ($('#page-title-origin').length > 0) {

        $('<h1 id="page-title">' + $('#page-title-origin').text() + '</h1>').insertAfter('.navbar-brand');
        $('#navbar').addClass('has-page-title');
    }

    var headerTimeout;

    $(window).scroll(function() {

        if (!headerTimeout)        
            headerTimeout = setTimeout(function() {            

                if ($(this).scrollTop() > 1) {
                    
                    $('body').addClass("sticky");
                    $('#header-img').slideUp('slow');
                }
                else {

                    $('body').removeClass("sticky");
                    $('#header-img').slideDown('slow');
                }

                headerTimeout = undefined;
            }, 200);
    });

    $('.navbar-toggler').click(function () {

        $('.navbar-collapse').toggle('slow');
    });

    $('#up').click(function () {

        $('html, body').animate({
            scrollTop: 0
        }, $(document).scrollTop() > $(window).height() ? 1000 : 250);
    });

    if ($('.widget.jetpack_subscription_widget .success').length > 0) {

        alertify.delay(10000).success($('.widget.jetpack_subscription_widget .success').text());
    }
});
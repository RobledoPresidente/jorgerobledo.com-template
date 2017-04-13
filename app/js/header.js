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
                    $('.navbar').removeClass('container');
                }
                else {

                    $('body').removeClass("sticky");
                    $('#header-img').slideDown('slow');
                    $('.navbar').addClass('container');
                }

                headerTimeout = undefined;
            }, 200);
    });

    $('.navbar-toggler').click(function () {

        $('.navbar-collapse').toggle('slow');
    });
});
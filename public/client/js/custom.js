$(document).ready(function () {
    // active menu item
    let path = window.location.pathname;
    let currentUriElement = path.split('/');
    if (currentUriElement[1] == "") {
        $(".scroll-menu nav ul li a[href='/']").parent().addClass('active');
    } else {
        $("#page-navbar ul li a[href='/" + currentUriElement[1] + "']").parent().addClass('active');
        $(".scroll-menu nav ul li a[href='/" + currentUriElement[1] + "']").parent().addClass('active');
    }

    // mobile side menu
    $('.thumb-btn-mobile').click(function () {
        $(this).addClass('active');
        $('.mobile-side-menu').css('left', '0');
        $('body').css('overflow', 'hidden');
        $('.backdrop-mobile-side-menu').addClass('backdrop-mobile-side-menu-active');
    });
    $('.backdrop-mobile-side-menu').click(function () {
        $('.thumb-btn-mobile').removeClass('active');
        $('.mobile-side-menu').css('left', '-75%');
        $('body').css('overflow', 'auto');
        $(this).removeClass('backdrop-mobile-side-menu-active');
    });

    // top menu
    $(window).bind('mousewheel', function (event) {
        if ($(document).scrollTop() > 500) {
            if (event.originalEvent.wheelDelta >= 0) {
                $('.scroll-menu').css('top', '0px');
            } else {
                $('.scroll-menu').css('top', '-100px');
                $('.dropdown-search-box').removeClass('show');
                $('.dropdown-scroll-menu .dropdown-menu').removeClass('show');
            }
        } else {
            $('.scroll-menu').css('top', '-100px');
            $('.dropdown-search-box').removeClass('show');
            $('.dropdown-scroll-menu .dropdown-menu').removeClass('show');

        }
    });

    // input[type='date']
    $(function () {
        $("#inputFlightCheckInDate").datepicker();
        $("#inputFlightCheckOutDate").datepicker();
        $("#inputTransferDate").datepicker();
        $("#inputHotelCheckInDate").datepicker();
        $("#inputHotelCheckOutDate").datepicker();
        $("#inputToursDate").datepicker();
        $("#inputCarRentStartDate").datepicker();
        $("#inputCarRentReturnDate").datepicker();
        $(".tour-result #inputTourCheckInDate").datepicker();
        $(".tour-result #inputTourCheckOutDate").datepicker();
    });

    // home | a-fact | map
    var targetMap = null;
    $('.area-icon').hover(function () {
        targetMap = $(this).attr('id');
        $(".map").find("img[hover-target='#" + targetMap + "']").css('opacity', '1');
    }, function () {
        $(".map").find("img[hover-target='#" + targetMap + "']").css('opacity', '0.25');
    });

    // back-top
    $('#back-top').click(function () {
        setTimeout(function () {
            $('.scroll-menu').css('top', '-100px');
        }, 1000);
    });

    // handle css
    var headerHeight = $('header').height();
    var breadcrumbHeight = $('.breadcrumb-box').height();
    var mediaWidth = screen.width;
    if (mediaWidth >= 992) {
        $('.breadcrumb-box').css('padding-top', 'calc(70vh - ' + headerHeight + 'px - ' + breadcrumbHeight + 'px)');
    } else if (mediaWidth >= 768) {
        $('.breadcrumb-box').css('padding-top', 'calc(40vh - ' + headerHeight + 'px - ' + breadcrumbHeight + 'px)');
    } else {
        $('.breadcrumb-box').css('padding-top', 'calc(47.5vh - ' + headerHeight + 'px - ' + breadcrumbHeight + 'px)');
    }


    // open-link social
    var openImgHeight = $('.open-img').height();
    openImgHeight = openImgHeight / 5;
    $('.open-social').css({ 'line-height': openImgHeight / 15, 'height': openImgHeight, 'width': openImgHeight });

});
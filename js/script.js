$(function () {
    $('.p-drawer').click(function () {
        $('.p-drawer').toggleClass('active');
        $('.p-drawer-content').toggleClass('open');
        $('.p-drawer-background').toggleClass('is-checked');
    });
});

jQuery(window).on("scroll", function ($) {
    if (jQuery(this).scrollTop() > 100) {
        jQuery('.floating').show();
    } else {
        jQuery('.floating').hide();
    }
});

jQuery('.floating').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});

var swiper_1 = new Swiper('.swiper_1', {
    loopAdditionalSlides: 1,
    loop: true, // ループ有効
    autoplay: {     //追記
        delay: 4000,   //追記
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});

const swiper = new Swiper('.swiper_2', {
    spaceBetween: 10,
    speed: 3000, // ループの時間
    autoplay: {
        delay: 0,
    },
    breakpoints: {
        420: { slidesPerView: 2, },
        768: { slidesPerView: 3, },
        1024: { slidesPerView: 4, },
        1200: { slidesPerView: 4, },
    },
    loopAdditionalSlides: 1,
    loop: true // ループ有効
});

jQuery('.js-top-btn').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 300);//スムーススクロールの速度
    return false;
});
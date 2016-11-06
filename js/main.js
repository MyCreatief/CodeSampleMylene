// Open navigation overlay
function openNav() {
    burger = $('.hamburger');

    document.getElementById("mc_nav").style.width = "100%";
    burger.attr('onclick', 'closeNav()');
    burger.toggleClass('close_nav');
    $('.header-container ').toggleClass('nav_open');
    $('.title ').toggleClass('overlay_item');
}

// Close navigation overlay
function closeNav() {
    burger = $('.hamburger');

    document.getElementById("mc_nav").style.width = "0%";
    burger.attr('onclick', 'openNav()');
    burger.toggleClass('close_nav');
    $('.header-container ').toggleClass('nav_open');
    $('.title ').toggleClass('overlay_item');
}

// Create a sticky header
function sticky() {
    var  menu = $(".header");
    menu_scrolled = "mc_scrolled";
    topspace = $('body');
    hdr = $('#header').outerHeight();

    $(window).scroll(function() {
        if( $(this).scrollTop() > hdr ) {
            menu.addClass(menu_scrolled);
        } else {
            menu.removeClass(menu_scrolled);
        }
    });
};

// Adding extra html to make te button work
function bttn_effect() {
    if ($('.amazing_buttons a').hasClass('btn_1')) {
        $('.btn_1').append('<svg><rect x="0" y="0" fill="none" width="100%" height="100%"></rect></svg>');
    }
}

$(document).ready(function() {
    sticky();
    bttn_effect();
});
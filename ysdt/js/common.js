// 分類menu開合
$('.nav-menu').hover(function() {
    $('.menu-one').stop(true,true).slideToggle();
});

// 標籤雲
var tagslide = new Swiper('.tag-cloud', {
    slidesPerView: 'auto',
    loop:true,
});

// power by
var removeClass = true;
$('.pbybtn').click(function(e) {
    e.preventDefault();
    $('.pby_detail').addClass('active');
    removeClass = false;
});
$('.pbyclose').click(function(e) {
    e.preventDefault();
    $('.pby_detail').removeClass('active');
    removeClass = false;
});
$('html').click(function () {
    if (removeClass) {
        $(".pby_detail").removeClass('active');
    }
    removeClass = true;
});

// gotop
$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('.gotop').fadeIn(500);
    } else {
        $('.gotop').stop().fadeOut(500);
    }
});
$('.gotop').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});
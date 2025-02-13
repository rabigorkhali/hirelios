//Back to Top
var btn = $('#back-top');

$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
btn.addClass('show');
} else {
btn.removeClass('show');
}
});
btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});

$(function () {
var stickyHeaderTop = $('.rd-display').offset().top;
$(window).scroll(function () {
    if ($(window).scrollTop() > stickyHeaderTop) {
        $('.rd-display').addClass('fix');
    } else {
        $('.rd-display').removeClass('fix');
    }
});
});

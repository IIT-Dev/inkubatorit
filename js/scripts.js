$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

function offsetAnchor() {
    if($(location.hash).length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - 80);
    }
}
$(window).on("hashchange", function () {
    offsetAnchor();
});

window.setTimeout(function() {
    offsetAnchor();
}, 1);

$(document).on('ready', function() {

});


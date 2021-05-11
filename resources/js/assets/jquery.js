$(function () {
  $('#btn').on('click', function() {
      $('.test').css("background-color", "red");
  });
  $('#top').on('click', function() {
    $(window).scrollTop(600);
    $(window).scrollLeft(600);
    console.log('(%d, %d)',$(window).scrollLeft(), $(window).scrollTop());
  });
  $('#bottomBtn').on('click', function() {
    $('html, body').animate(
        { scrollTop: $('body').get(0).scrollHeight },
        200 * 100 * 100,
        'inner',
    );
});
});
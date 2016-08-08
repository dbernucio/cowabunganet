$(function() {
  // menu
  var gNav          = $('.main-nav'),
      gMobileStripe = $('.menu-stripe'),
      gMobileMenu   = $('.mobile-menu');

  gNav.on('click', 'li', function(e) {
    e.preventDefault();
    $('html,body').scrollTo($(this).find('a').attr('href'), 500);
  });

  gMobileMenu.on('click', function() {
    $(this).fadeToggle();
  });

  gMobileStripe.on('click', function() {
    gMobileMenu.fadeToggle();
  });

  // networks
  $('.card').hover(function () {
    var self = $(this).find('.networks');
    if(self.css('visibility') == 'hidden') {
      self.css({ visibility: 'visible' });
    }
    else {
      self.css({ visibility: 'hidden' });
    }
  });
});

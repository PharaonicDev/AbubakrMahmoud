define([], function () {
  'use strict';

  var keno = (function () {   
    var init = function () {
      var $window = $(window);
      var $gifs = $('.figure--gif img');

      // Sync animations
      if ($gifs.length) {
        setTimeout(function(){
          $gifs.attr('src', function(i, a) {
            var url = $(this).attr('src');
            $(this).attr('src', url);
            $(this).addClass('figure__image--is-loaded');
          });
        }, 1000);
      }
    };

    var destroy = function () {

    };

    return {
      path: 'modules/keno',
      destroy:  destroy,
      init:     init
    };
  })();
  
  return keno;
});
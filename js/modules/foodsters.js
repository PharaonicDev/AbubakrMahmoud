define([], function () {
  'use strict';

  var foodsters = (function () {  
    var skroll;
    
    var init = function () {
      require([
        'skrollr', 'twitter'
      ], function (skrollr) {
        // Knoll
        $('.knoll__item').each(function () {
          var knoll_x = parseInt($(this).css('left').replace(/px/, ''));
          var knoll_width = parseInt($(this).css('width').replace(/px/, ''));
          var knoll_offset = 200;
          var knoll_min = 0 - knoll_offset;
          var knoll_max = 940 + knoll_offset;
          var knoll_range = knoll_max - knoll_min;
          var knoll_percentage = (knoll_x + knoll_width / 5) / 940;
          var knoll_rotation = '-15deg';
          var knoll = Math.round(knoll_range * knoll_percentage) + knoll_min;

          if (knoll_percentage > 0.5) {
            knoll_rotation = '15deg';
          }

          $(this).attr('data-20p-center', 'top:' + $(this).css('top') + ';' + 'left:' + $(this).css('left') + ';' + 'transform:rotate(0deg);');
          $(this).attr('data-bottom', 'top:' + addPixels($(this).css('top'), '300') + ';' + 'left:' + knoll + 'px' + ';' + 'transform:rotate(' + knoll_rotation + '); transform-origin:center;');
        });

        skroll = skrollr.init({
          forceHeight: false,
          smoothScrolling:  false
        });
        
        twttr.widgets.load();

        if (skroll.isMobile()) {
          skroll.destroy();
        }
      });
    };

    var addPixels = function (val1, val2) {
      return (parseInt(val1.replace(/px/, '')) + parseInt(val2.replace(/px/, ''))) + 'px';
    };

    var destroy = function () {
      skroll.destroy();
    };

    return {
      path:     'modules/foodsters',
      destroy:  destroy,
      init:     init
    };
  })();
  
  return foodsters;
});
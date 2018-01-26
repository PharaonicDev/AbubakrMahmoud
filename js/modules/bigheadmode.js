define([], function () {
  'use strict';

  var MedicalCare = (function () {   
    var skroll;
    
    var init = function () {
      console.log('MedicalCare');
      
      require([
        'skrollr'
      ], function (skrollr) {
        skroll = skrollr.init({
          forceHeight: false,
          smoothScrolling:  false
        });

        if (skroll.isMobile()) {
          skroll.destroy();
        }
      });
    };

    var destroy = function () {
      skroll.destroy();
    };

    return {
      path:     'modules/MedicalCare',
      destroy:  destroy,
      init:     init
    };
  })();
  
  return MedicalCare;
});
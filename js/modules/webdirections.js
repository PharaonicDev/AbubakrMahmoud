define([], function () {
  'use strict';

  var webdirections = (function () {   
    var init = function () {
      console.log('webdirections');
      
      require([
        'twitter'
      ], function () {
        twttr.widgets.load();
      });
    };

    var destroy = function () {

    };

    return {
      path: 'modules/webdirections',
      destroy:  destroy,
      init:     init
    };
  })();
  
  return webdirections;
});
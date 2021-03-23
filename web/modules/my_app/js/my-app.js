(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.mybehavior = {
    attach: function (context, settings) {

      console.log('hello world');

    }
  };

})(jQuery, Drupal, drupalSettings);

(function ($, Drupal) {
  Drupal.behaviors.LayoutBuilderCustomizer = {
    attach: function attach(context) {
      $(once(
          "layout-builder-customizer",
          "#layout-builder .js-layout-builder-block",
          context
      )).hover(function () {
        $(this).toggleClass("layout-builder-customizer--links");
      });
    },
  };
})(jQuery, Drupal);

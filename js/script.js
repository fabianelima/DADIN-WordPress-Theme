(function() {
  $(function() {
    var func, menu;
    menu = false;
    func = {
      menuMobile: function() {
        if (menu === false) {
          menu = true;
          return $('.dadin-menu-mobile-options').animate({
            height: '100%'
          });
        } else {
          menu = false;
          return $('.dadin-menu-mobile-options').animate({
            height: '0'
          });
        }
      }
    };
    return $(document).on('click', '.dadin-menu-mobile', function() {
      return func.menuMobile();
    });
  });

}).call(this);

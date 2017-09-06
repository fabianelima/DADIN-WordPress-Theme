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
      },
      randomHeader: function() {
        var randy;
        randy = Math.floor((Math.random() * 9) + 1);
        console.log(randy);
        return $('.jumbotron').css({
          background: 'url("http://univac.local/dadin_wp/wp-content/themes/dadin/img/t' + randy + '.jpg") 100%'
        });
      }
    };
    $(document).ready(function() {
      return func.randomHeader();
    });
    return $(document).on('click', '.dadin-menu-open', function() {
      return func.menuMobile();
    });
  });

}).call(this);

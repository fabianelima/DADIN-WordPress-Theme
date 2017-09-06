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
        var randy, viewport;
        randy = Math.floor((Math.random() * 9) + 1);
        viewport = $(window).width();

        /* $('.jumbotron').css {
          background: 'url("http://univac.local/dadin_wp/wp-content/themes/dadin/img/t' + randy + '.jpg")',
          backgroundSize: viewport
        }
         */
        return $('.jumbotron').css({
          background: 'url("http://dadin.ct.utfpr.edu.br/wp-content/themes/dadin/img/t' + randy + '.jpg")',
          backgroundSize: viewport
        });
      }
    };
    $(window).resize(function() {
      return func.randomHeader();
    });
    $(document).ready(function() {
      return func.randomHeader();
    });
    return $(document).on('click', '.dadin-menu-open', function() {
      return func.menuMobile();
    });
  });

}).call(this);

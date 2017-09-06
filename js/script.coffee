$ ->
  menu = false
  func =
    menuMobile: ->
      if menu is false
        menu = true
        $('.dadin-menu-mobile-options').animate { height: '100%' }
      else
        menu = false
        $('.dadin-menu-mobile-options').animate { height: '0' }

    randomHeader: ->
      randy = Math.floor((Math.random() * 9) + 1)
      viewport = $(window).width()

      # $('.jumbotron').css {
      #   background: 'url("http://univac.local/dadin_wp/wp-content/themes/dadin/img/t' + randy + '.jpg")',
      #   backgroundSize: viewport
      # }

      $('.jumbotron').css {
        background: 'url("http://dadin.ct.utfpr.edu.br/wp-content/themes/DADIN-WordPress-Theme-master/img/t' + randy + '.jpg")',
        backgroundSize: viewport
      }

  $(window).resize -> func.randomHeader()
  $(document).ready -> func.randomHeader()
  $(document).on 'click', '.dadin-menu-open', -> func.menuMobile()

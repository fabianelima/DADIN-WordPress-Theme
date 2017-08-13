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

  $(document).on 'click', '.dadin-menu-mobile', -> func.menuMobile()

<div class="col-md-3 dadin-menu">
  <ul class="nav nav-tabs nav-stacked dadin-menu-left">
    <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
    <?php wp_list_pages( '&title_li=' ); ?>
    <li><a href="http://www.utfpr.edu.br">UTFPR</a></li>
  </ul>
  <div class="dadin-menu-mobile">
    <span class="glyphicon glyphicon-menu-hamburger dadin-menu-open"></span>
    <div class="dadin-menu-mobile-options">
      <ul>
        <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
        <?php wp_list_pages( '&title_li=' ); ?>
        <li><a href="http://www.utfpr.edu.br">UTFPR</a></li>
      </ul>
    </div>
  </div>
</div>

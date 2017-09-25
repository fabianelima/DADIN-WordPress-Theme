<?php if ( is_active_sidebar( 'agenda' ) ) : ?>
  <div class="dadin-agenda">
  <!--img src="<!?php //echo get_bloginfo('template_directory'); ?>/img/agenda.svg"-->
    <?php dynamic_sidebar( 'agenda' ); ?>
  </div>
<?php endif; ?>

<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <?php include 'menu.php'; ?>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-9 dadin-content">
          <h3>Resultados da busca</h3>

          <?php echo $wp_query->found_posts; ?> <?php _e( 'resultados de busca para', 'locale' ); ?>: "<?php the_search_query(); ?>"
          <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> &mdash; <?php the_time('F jS, Y') ?></h4>
  				<p><?php the_content(); ?></p>

          <div class="pagination">
            <?php posts_nav_link('&nbsp;','<span class="next">Próximos &raquo;</span>','<span class="prev">&laquo; Anteriores</span>'); ?>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

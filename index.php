<?php get_header(); ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'menu.php'; ?>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-9 dadin-content">
              <?php
          			
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>

						 <article class="post">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            						<p class="post-info"><?php the_time('j F, Y'); ?></p>
							<?php the_content(); ?>
						</article>

					<?php endwhile;

					else : 
						echo '<p>Ops! Sem mais posts!</p>';

          endif;
		
          		?>	
				<div class="pagination">
                <?php posts_nav_link('||','<span class="next">Próximos &raquo;</span>','<span class="prev">&laquo; Anteriores</span>'); ?>
                </div>
            </div>	
			  
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>

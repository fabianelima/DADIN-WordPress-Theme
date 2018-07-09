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

						 <article class="post page">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</article>

					<?php endwhile;

					else : 
						echo '<p>Ops! Sem mais posts!</p>';

					endif;

		
          		?>
            </div>

            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>



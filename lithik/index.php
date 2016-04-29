<?php get_header(); ?>
     
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('content') ?>  
<?php get_sidebar(); ?>    
<?php endwhile; ?>
           
        <div>
         <?php if ( $wp_query->max_num_pages > 1 ) : ?>
             <nav id="nav_footer">
                    <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">←</span> Предыдущая запись') ); ?></div>
                    <div class="nav-next"><?php previous_posts_link( __( 'Следующая запись <span class="meta-nav">→</span>') ); ?></div>
             </nav><!-- #nav-below .navigation -->
          <?php endif; ?>
        </div>

         


<?php get_footer(); ?>





<!-- Post Start -->
    <div class="site-content"> 
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                    <div class="featured-post">
                        <?php _e( 'Избранная запись' ); ?>
                    </div>
                    <?php endif; ?>   
                    
        <header class="entry-header">
                        <!-- Если это запись -->
                        <?php if ( is_single() || is_sticky() ) : ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php else : ?>
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
                        </h1>
                        <?php endif; ?>                         
                        <div class="categories"><?php _e( 'Платформа&#58; ', 'striped' ) . the_category(', '); ?></div>
                        <div class="tags"><?php the_tags(__( 'Метки: ', 'striped' ),', '); ?></div>
         <div class="info">
            <span class="date">
            <span class="day"><?php the_time('j'); ?></span>
            <span class="month"><?php the_time('M'); ?></span>
            <span class="year"><?php the_time('Y'); ?></span>
<!-- <span class="month">Jan<span>uary</span></span> <span class="day">14</span><span class="year">, 2013</span> -->
                          
        </div>
        </header><!-- .entry-header -->                 
                    
       
        
        <?php if ( is_search() ) : // Покаывать только краткое описание записи, если это результаты поиска?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                    <?php else : ?>
                    <div class="entry-content">
                        <?php the_content( __( 'Читатать дальше.. <span class="meta-nav">→</span>') ); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Страницы:'), 'after' => '</div>' ) ); ?>
                    </div><!-- .entry-content -->
                    <?php endif; ?>
        </article>
        </div>
        
        
      
<!-- Post End -->



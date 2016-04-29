<?php
    get_header(); ?>
    
    
    <!-- КОНТЕНТ-->
    <div class="site-content"> 
        <!-- Начало цикла WordPress -->
         <
    
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                    
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
                        
                        <?php echo get_the_category_list(); ?>
                        <?php echo get_the_tag_list('', ', ');?>
                        
                    </header><!-- .entry-header -->

                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                 
                        
                  
                </article><!-- #post -->
                
            <?php endwhile; ?>
            <!-- Конец цикла WordPress -->
        <!-- ЕСЛИ Записей нет - > выводим сообщение: -->
        <?php endif; // конец have_posts() проверки ?>
        
        </div><!-- .site-content -->
        <div class="clear"></div>
     <?php   get_sidebar(); ?>
    
        <?php             
    get_footer();    ?>
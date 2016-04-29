<?php
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('content') ?> 
<?php get_sidebar(); ?>         
<?php endwhile; ?>   

<?php get_footer(); ?>

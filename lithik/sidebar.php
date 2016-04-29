
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar2') ) : ?>
   
<div class="site-navigation">
<ul>
<p> Свежие новости </p>
<?php get_archives('postbypost', 10); ?>
</ul>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
<?php endif; ?>

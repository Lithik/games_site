<?php
/**
 * Файл Index.php
 *
 *
 * Отображает страницы сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage Simplest_Site
 * @since Lithik Site 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel='stylesheet' id='main-style'  href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />
    <?php wp_head(); ?>
</head>
          <div></div>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <!-- Шапка -->
    <header id="masthead" class="site-header" role="banner">
      
   <!-- Название сайта -->
    <div id="banner">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    
    <!-- ГОРИЗОНТАЛЬНОЕ МЕНЮ -->
        <div id="gorizont_menu">
            <nav id="navigation" role="navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </nav>
        </div>
        
        
        
     <!-- МЕНЮ -->
        <div class="site-navigation">
            <?php wp_list_categories('title_li=Игры по платформам'); ?>
            
     <!-- поиск -->
            <div id="search-container">
                 <div class="search-box">
                        <?php get_search_form(); ?>
                 </div>
           
 
</div>
        </div>
    </header><!-- #masthead -->
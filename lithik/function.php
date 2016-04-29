<?php
add_action( 'widgets_init', 'registriruem_sidebari' );
 
function registriruem_sidebari() {
/* Регистрируем 'primary' сайдбар. */
register_sidebar(
  array(
    'id' => 'primary',
    'name' => __( 'Primary' ),
    'description' => __( 'Описание сайдбара (видно в админ панеле).' ),
    'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="my_widget-title">',
    'after_title' => '</h4>'
    )
   );
   /* Вы можете повторить функцию register_sidebar() для других виджетов, поле id должно быть уникальным (primary, secondary, moiwidget и так далее. */
}
?>



<?php
if ( function_exists('register_sidebars') )
register_sidebars(1);
? >
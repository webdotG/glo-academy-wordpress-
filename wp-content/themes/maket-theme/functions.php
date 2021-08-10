<?php 

/* ПОДКЛЮЧЕНИЕ СТИЛЕЙ */

wp_enqueue_style( 'slick', get_template_directory_uri(  ) . '/slick/slick.css');
                           
wp_enqueue_style( 'slick-theme', get_template_directory_uri(  ) . '/slick/slick-theme.css');

wp_enqueue_style( 'animate', get_template_directory_uri(  ) . '/css/animate.css');

wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(  ) . '/css/bootstrap-grid.min.css');

wp_enqueue_style( 'style', get_template_directory_uri(  ) . '/css/style.css');


/* ПОДКЛЮЧЕНИЕ ДЖЕЙКВЕРИ */

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}


/* ПОДКЛЮЧЕНИЕ СКРИПТА ЗАВИСЯЩЕГО ОТ JQUERY */

wp_enqueue_script( 'slick', get_template_directory_uri(  ) . '/slick/slick.min.js', 'jquery', null, true);

wp_enqueue_script( 'maskedinput', get_template_directory_uri(  ) . '/js/jquery.maskedinput.min.js', 'jquery', null, true);


/* ПОДКЛЮЧЕНИЕ СКРИПТА НЕ ЗАВИСЯЩЕГО ОТ JQUERY */

wp_enqueue_script( 'wow', get_template_directory_uri(  ) . '/js/wow.min.js', null, null, true); 



?>
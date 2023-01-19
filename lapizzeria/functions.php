<?php

/** CSS y JS */
/*
function lapizzeria_styles() {
    // Agregar hojas de estilo
    wp_enqueue_style('normalize', get_template_directory_uri() .'/normalize.css', array(), '8.0.1');
    //wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array('normalize'), '1.0.10');
    wp_enqueue_style('slicknavcss', get_template_directory_uri().'/css/slicknav.min.css', array('normalize'), '1.0.10');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&display=swap', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    // Scrips
    wp_enqueue_script('slicknavjs', get_template_directory_uri().'/js/slicknav.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true); 
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');
*/

function lapizzeria_styles(){

    //Normalize 
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
    //SlickNav
    wp_enqueue_style('slicknavCSS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.2/slicknav.min.css', array('normalize'), '1.0.10');
    //Google Fonts
    wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&display=swap', array(), '1.0.0');
     //Agregar hojas de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    //Script 
    //SlickNav JS
    wp_enqueue_script('slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.2/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    //Scripts JS
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

/** Menús **/
function lapizzeria_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header Menu'
    ));
}
add_action('init', 'lapizzeria_menus');
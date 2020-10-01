<?php

// registramos
wp_register_style('bootstrap', get_theme_file_uri( 'inc/bootstrap.min.css' ) );

wp_register_style('dt_style', get_stylesheet_uri(), array( 'bootstrap') );

//encolamos
function encolar_estilos(){

    wp_enqueue_style( 'dt_style' );

}

// gancho 

add_action('wp_enqueue_scripts','encolar_estilos');

//jquery
wp_register_script( 'jquery', get_theme_file_uri( 'inc/jquery.min.js' ),'','3.5.1', true );

// Javascript

wp_register_script( 'bootstrapjs', get_theme_file_uri( 'inc/bootstrap.min.js' ),['jquery'],'4.5.1', true );



wp_register_script( 'dt_script', get_theme_file_uri( 'script.js' ),['bootstrapjs','jquery'],'', true );

//encolamos

function encolar_script(){

    wp_enqueue_script( 'dt_script' );

}
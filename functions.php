<?php 
require_once('wp-bootstrap-navwalker.php');
function load_stylesheets()
    {
        
        wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css' , 
        
        array() , false , 'all') ;
        
        wp_enqueue_style('bootstrap');

        wp_register_style('style',get_template_directory_uri() . '/style.css' , 
        
        array() , false , 'all') ;
        
        wp_enqueue_style('style');

    }
add_action('wp_enqueue_scripts' , 'load_stylesheets') ;



function include_jquery()
        
        {

            wp_deregister_script('jquery');
            wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery.min.js','',1,true);

     

        }

        add_action('wp_enqueue_scripts' , 'include_jquery');




function loadjs()
    
    {

        wp_register_script('customjs',get_template_directory_uri() . '/js/scripts.js','',1,true);
        wp_enqueue_script('customjs');

    }
    add_action('wp_enqueue_scripts','loadjs');


    add_theme_support('menus');
	add_theme_support('thumbnails');

 
function register_menu(){

    register_nav_menus(array(

        'boostrap-menu'=>'navigation menu',
        'footer-menu'=>'footer bar'

    ));
}
add_action('init','register_menu');

function boostrab_nav_menu(){

    wp_nav_menu(
        array(

            'theme_location'    =>'boostrap-menu',
            'menu_class'        =>'navbar-nav ',
            'container'            =>false,
            'depth'                =>2,
            'walker'            => new wp_bootstrap_navwalker()





        ));

}
//add_action('init','register_menu');
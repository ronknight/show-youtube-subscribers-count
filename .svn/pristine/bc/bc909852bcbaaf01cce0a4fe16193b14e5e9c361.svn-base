<?php
    //Add Scripts
    function ytsub_add_scripts(){
        //main css
        wp_enqueue_style('ytsub-main-style', plugins_url( 'css/style.css', __FILE__));
        //main js
        wp_enqueue_style('ytsub-main-script', plugins_url( 'js/main.js', __FILE__));  
        
        //add google script
        wp_register_script('google', 'https://apis.google.com/js/platform.js');
        wp_enqueue_script('google');
    } 

    add_action('wp_enqueue_scripts', 'ytsub_add_scripts');
 
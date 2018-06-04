<?php

function add_scripts() {
    wp_enqueue_style('main-style', plugins_url(). '/jh-itworks-usercounter/css/style.css');
    wp_enqueue_script('main-script', plugins_url(). '/jh-itworks-usercounter/js/main.js');
}

add_action('wp_enqueue_scripts', 'add_scripts');

?>
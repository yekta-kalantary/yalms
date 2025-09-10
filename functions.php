<?php
function yektatheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('منوی اصلی', 'yektatheme')
    ));
}
add_action('after_setup_theme', 'yektatheme_setup');

function yektatheme_register_post_types() {
    register_post_type('course', array(
        'labels' => array(
            'name' => __('دوره‌ها', 'yektatheme'),
            'singular_name' => __('دوره', 'yektatheme')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'دوره-ها')
    ));

    register_post_type('lesson', array(
        'labels' => array(
            'name' => __('درس‌ها', 'yektatheme'),
            'singular_name' => __('درس', 'yektatheme')
        ),
        'public' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'درس-ها')
    ));
}
add_action('init', 'yektatheme_register_post_types');

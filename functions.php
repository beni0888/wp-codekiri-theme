<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_register_style('codekiri-google-fonts', '//fonts.googleapis.com/css?family=Domine:400,700');
    wp_enqueue_style('codekiri-google-fonts');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function add_theme_favicon() {
    echo '<link rel="apple-touch-icon" sizes="57x57" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-57x57.png">';
    echo '<link rel="apple-touch-icon" sizes="60x60" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-60x60.png">';
    echo '<link rel="apple-touch-icon" sizes="72x72" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-72x72.png">';
    echo '<link rel="apple-touch-icon" sizes="76x76" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-76x76.png">';
    echo '<link rel="apple-touch-icon" sizes="114x114" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-114x114.png">';
    echo '<link rel="apple-touch-icon" sizes="120x120" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-120x120.png">';
    echo '<link rel="apple-touch-icon" sizes="144x144" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-144x144.png">';
    echo '<link rel="apple-touch-icon" sizes="152x152" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-152x152.png">';
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/apple-touch-icon-180x180.png">';
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/favicon-32x32.png" sizes="32x32">';
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/favicon-194x194.png" sizes="194x194">';
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/favicon-96x96.png" sizes="96x96">';
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/android-chrome-192x192.png" sizes="192x192">';
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/favicon-16x16.png" sizes="16x16">';
    echo '<link rel="manifest" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/manifest.json">';
    echo '<link rel="mask-icon" href="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">';
    echo '<meta name="msapplication-TileColor" content="#da532c">';
    echo '<meta name="msapplication-TileImage" content="' . get_bloginfo('stylesheet_directory') . '/assets/favicons/mstile-144x144.png">';
    echo '<meta name="theme-color" content="#ffffff">';
}
add_action('wp_head', 'add_theme_favicon');
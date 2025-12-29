<?php
function my_enqueue_styles() {
    wp_enqueue_style(
        'my-style', 
        get_template_directory_uri() . '/public/assets/css/style.css'
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

function my_enqueue_scripts() {
    wp_enqueue_script(
        'my-script',
        get_template_directory_uri() . '/public/assets/js/script.min.js',
        array(), 
        '1.0.0',
        true 
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');



function my_enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style(
    'swiper-css',
    get_template_directory_uri() . '/public/assets/css/swiper-bundle.min.css',
    array(), // 依存なし
    '11.0.0'
    );
    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/public/assets/js/swiper-bundle.min.js',
        array(), // 依存なし
        '11.0.0',
        true // フッターに読み込む
    );
    
    }
    // 優先度を低くして先に読み込む
    add_action('wp_enqueue_scripts', 'my_enqueue_swiper_assets', 5);


    function my_enqueue_google_fonts() {
        wp_enqueue_style(
            'google-fonts',
            'https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap',
            array(),
            null
        );
    }
    add_action('wp_enqueue_scripts', 'my_enqueue_google_fonts');
    
?>


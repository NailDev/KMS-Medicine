<?php
/**
 * Функции дочерней темы KMS Medicine
 */

function kms_theme_scripts() {
    // 1. Стили
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.4');
    
    // 2. jQuery 
    wp_enqueue_script('jquery');
    
    // 3. Качтомный javascript
    wp_enqueue_script(
        'kms-medicine-js',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        '1.0.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'kms_theme_scripts', 20);

// Настройка темы
function kms_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Основное меню',
    ));
}
add_action('after_setup_theme', 'kms_theme_setup');

// Стиль для баннера
function kms_banner_styles() {
    ?>
    <style>
    :root {
        --banner-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Banner1.jpg');
    }
    </style>
    <?php
}
add_action('wp_head', 'kms_banner_styles');
?>
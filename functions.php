<?php 

function load_style_script() {
    // wp_enqueue_script('jquery-1', 'http://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
    // wp_deregister_script('jquery');
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_script('jquery-mig', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js');
    // wp_enqueue_script('javascript', get_template_directory_uri() . '/js/js.js');
    // wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


// add_action('wp_enqueue_scripts', 'load_style_script');

add_theme_support('post-thumbnails');

add_action( 'after_setup_theme', function() { 
	register_nav_menus( [
        'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );
} );

add_action( 'init', 'products' );
function products() {
    register_post_type('products', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-heart',
      'labels' => array(
          'name' => 'Продукты',
          'all_items' => 'Все продукты',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить новый продукт'
          
      )
    ));
}

add_action( 'init', 'news' );
function news() {
    register_post_type('news', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor', 'excerpt'),
      'menu_icon' => 'dashicons-megaphone',
      'labels' => array(
          'name' => 'Новости',
          'all_items' => 'Все новости',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить новость'
          
      )
    ));
}

add_action( 'init', 'articles' );
function articles() {
    register_post_type('articles', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-media-spreadsheet',
      'labels' => array(
          'name' => 'Сатьи',
          'all_items' => 'Все статьи',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить статью'
          
      )
    ));
}

add_action( 'init', 'photo' ); 
function photo() {
    register_post_type('photo', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title'),
      'menu_icon' => 'dashicons-format-image',
      'labels' => array(
          'name' => 'Фотогалерея',
          'all_items' => 'Все фото',
          'add_new' => 'Добавить новое',
          'add_new_item' => 'Добавить фото'
          
      )
    ));
}

add_action( 'init', 'partners' ); 
function partners() {
    register_post_type('partners', array(
      'public' => true,
      'supports'  => array ('title', 'editor'),
      'menu_icon' => 'dashicons-buddicons-buddypress-logo',
      'labels' => array(
          'name' => 'Партнеры',
          'all_items' => 'Все партнеры',
          'add_new' => 'Добавить нового',
          'add_new_item' => 'Добавить партнера'
          
      )
    ));
}

add_action( 'init', 'sertificate' ); 
function sertificate() {
    register_post_type('sertificate', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title'),
      'menu_icon' => 'dashicons-awards',
      'labels' => array(
          'name' => 'Сертификаты',
          'all_items' => 'Все сертификаты',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить сертификат'
          
      )
    ));
}

add_action( 'init', 'contacts' ); /** регистрируем специалистов */
function contacts() {
    register_post_type('contacts', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor', 'custom-fields'),
      'menu_icon' => 'dashicons-location-alt',
      'labels' => array(
          'name' => 'Контакты',
          'all_items' => 'Все контакты',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить контакт'
          
      )
    ));
}

add_action( 'init', 'history' ); /** регистрируем специалистов */
function history() {
    register_post_type('history', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-clock',
      'labels' => array(
          'name' => 'История',
          'all_items' => 'Все записи',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить запись'
          
      )
    ));
}

add_action( 'init', 'question' ); /** регистрируем специалистов */
function question() {
    register_post_type('question', array(
      'public' => true,
      'supports'  => array ('title', 'editor'),
      'menu_icon' => 'dashicons-editor-help',
      'labels' => array(
          'name' => 'Вопрос-ответ',
          'all_items' => 'Все записи',
          'add_new' => 'Добавить новую',
          'add_new_item' => 'Добавить запись'
          
      )
    ));
}

add_action( 'init', 'reviews' ); /** регистрируем специалистов */
function reviews() {
    register_post_type('reviews', array(
      'public' => true,
      'supports'  => array ('thumbnail', 'title', 'editor'),
      'menu_icon' => 'dashicons-format-status',
      'labels' => array(
          'name' => 'Отзывы',
          'all_items' => 'Все отзывы',
          'add_new' => 'Добавить новый',
          'add_new_item' => 'Добавить отзыв'
          
      )
    ));
}

?>
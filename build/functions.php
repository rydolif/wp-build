<?php
//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/js/scripts.min.js', array(), '', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );
    
//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );
//------------------delet Post Type ----------------------
    function remove_menus(){
      // remove_menu_page( 'index.php' );                  //Консоль
      remove_menu_page( 'edit.php' );                   //Записи
      // remove_menu_page( 'upload.php' );                 //Медиафайлы
      // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
      // remove_menu_page( 'edit-comments.php' );          //Комментарии
      // remove_menu_page( 'themes.php' );                 //Внешний вид
      // remove_menu_page( 'users.php' );                  //Пользователи
      // remove_menu_page( 'tools.php' );                  //Инструменты
      // remove_menu_page( 'options-general.php' );        //Настройки
    }
    add_action( 'admin_menu', 'remove_menus' );

//------------------чистка від лишнього ----------------------
    remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
    remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
    remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
    remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
    remove_action('wp_head','wp_generator');  // скрыть версию wordpress
    function modify_jquery() {
            if (!is_admin()) {           
            wp_deregister_script('jquery');
            }
    }
    add_action('init', 'modify_jquery');

//------------------информация---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Базовые блоки',
            'menu_title'    => 'Базовые блоки',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

    }

//------------------меню----------------------
    register_nav_menus(array(
        // 'portfolio-menu' => 'Фильтр',
    ));


//------------------Register Custom Post новости----------------------
    function news_post_type() {
        $labels = array(
            'name'                  => _x( 'Новости', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Новости', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Новости', 'text_domain' ),
            'all_items'             => __( 'Новости', 'text_domain' ),
            'add_new_item'          => __( 'Добавить Новость', 'text_domain' ),
            'add_new'               => __( 'Добавить Новость', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Ремонт', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'editor'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'news', $args );
    }
    add_action( 'init', 'news_post_type', 0 );


//------------------Register Custom Post Ремонт----------------------
    function repairs_post_type() {
        $labels = array(
            'name'                  => _x( 'Ремонт', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Ремонт', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Ремонт', 'text_domain' ),
            'all_items'             => __( 'Ремонт', 'text_domain' ),
            'add_new_item'          => __( 'Добавить ремонт', 'text_domain' ),
            'add_new'               => __( 'Добавить ремонт', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Ремонт', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'editor'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'repairs', $args );
    }
    add_action( 'init', 'repairs_post_type', 0 );



//------------------Register Custom Post Строительство----------------------
    function building_post_type() {
        $labels = array(
            'name'                  => _x( 'Строительство', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Строительство', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Строительство', 'text_domain' ),
            'all_items'             => __( 'Строительство', 'text_domain' ),
            'add_new_item'          => __( 'Добавить строительство', 'text_domain' ),
            'add_new'               => __( 'Добавить строительство', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Строительство', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'editor'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'building', $args );
    }
    add_action( 'init', 'building_post_type', 0 );



//------------------Register Custom Post партнеры----------------------
    function partners_post_type() {
        $labels = array(
            'name'                  => _x( 'Партнеры', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Партнеры', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Партнеры', 'text_domain' ),
            'all_items'             => __( 'Партнеры', 'text_domain' ),
            'add_new_item'          => __( 'Добавить Партнера', 'text_domain' ),
            'add_new'               => __( 'Добавить Партнера', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Бренды', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'partners', $args );
    }
    add_action( 'init', 'partners_post_type', 0 );


//------------------гугл карта API----------------------
    function my_acf_init() {
        
        acf_update_setting('google_api_key', 'AIzaSyBmnk4RCDwjSucIJ2WXRnLkuCrsWR4DUM4&callback=initMap');
    }

    add_action('acf/init', 'my_acf_init');


//------------------Register Custom Post портфолио----------------------
    function portfolio_post_type() {
        $labels = array(
            'name'                  => _x( 'Портфолио', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Портфолио', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Портфолио', 'text_domain' ),
            'all_items'             => __( 'Портфолио', 'text_domain' ),
            'add_new_item'          => __( 'Добавить портфолио', 'text_domain' ),
            'add_new'               => __( 'Добавить портфолио', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Портфолио', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'portfolio', $args );
    }
    add_action( 'init', 'portfolio_post_type', 0 );


//------------------Register Custom Post отзывы----------------------
    function reviews_post_type() {
        $labels = array(
            'name'                  => _x( 'Отзывы', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Отзывы', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Отзывы', 'text_domain' ),
            'all_items'             => __( 'Отзывы', 'text_domain' ),
            'add_new_item'          => __( 'Добавить отзыв', 'text_domain' ),
            'add_new'               => __( 'Добавить отзыв', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Портфолио', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'editor'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'reviews', $args );
    }
    add_action( 'init', 'reviews_post_type', 0 );

//------------------пагинация----------------------
    function wptuts_pagination( $args = array() ) {
        
        $defaults = array(
            'range'           => 4,
            'custom_query'    => FALSE,
            'previous_string' => __( '<', 'text-domain' ),
            'next_string'     => __( '>', 'text-domain' ),
            'before_output'   => '<nav class="navigation pagination">',
            'after_output'    => '</nav>'
        );
        
        $args = wp_parse_args( 
            $args, 
            apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
        );
        
        $args['range'] = (int) $args['range'] - 1;
        if ( !$args['custom_query'] )
            $args['custom_query'] = @$GLOBALS['wp_query'];
        $count = (int) $args['custom_query']->max_num_pages;
        $page  = intval( get_query_var( 'paged' ) );
        $ceil  = ceil( $args['range'] / 2 );
        
        if ( $count <= 1 )
            return FALSE;
        
        if ( !$page )
            $page = 1;
        
        if ( $count > $args['range'] ) {
            if ( $page <= $args['range'] ) {
                $min = 1;
                $max = $args['range'] + 1;
            } elseif ( $page >= ($count - $ceil) ) {
                $min = $count - $args['range'];
                $max = $count;
            } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
                $min = $page - $ceil;
                $max = $page + $ceil;
            }
        } else {
            $min = 1;
            $max = $count;
        }
        
        $echo = '';
        $previous = intval($page) - 1;
        $previous = esc_attr( get_pagenum_link($previous) );
            if ( $previous && (1 != $page) )
            $echo .= '<a href="' . $previous . '" title="' . __( '', 'text-domain') . '">' . $args['previous_string'] . '</a>';
        
        if ( !empty($min) && !empty($max) ) {
            for( $i = $min; $i <= $max; $i++ ) {
                if ($page == $i) {
                    $echo .= '<span class="active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span>';
                } else {
                    $echo .= sprintf( '<a href="%s">%2d</a>', esc_attr( get_pagenum_link($i) ), $i );
                }
            }
        }
        
        $next = intval($page) + 1;
        $next = esc_attr( get_pagenum_link($next) );
        if ($next && ($count != $page) )
            $echo .= '<a href="' . $next . '" title="' . __( '', 'text-domain') . '">' . $args['next_string'] . '</a>';
        
        if ( isset($echo) )
            echo $args['before_output'] . $echo . $args['after_output'];
    }

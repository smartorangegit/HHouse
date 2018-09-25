<?php

/**
 *  @brief Розмір фото thumbnails
*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(590, 360);

remove_filter('the_content', 'wpautop'); // Отключаем автоформатирование в полном посте
remove_filter('the_excerpt', 'wpautop'); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter('comment_text', 'wpautop'); // Отключаем автоформатирование в комментариях

/**
 *  @brief Видалення лишніх тегів в head
 */
function rem_wp_ver_css_js( $src ) {
 
    if ( strpos( $src, 'ver=' ) )
 

        $src = remove_query_arg( 'ver', $src );
		$src =add_query_arg( array( 'ver' => '1.2'), $src);
    return $src;
}
add_filter( 'style_loader_src', 'rem_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 ); // links to the general feeds: post and comment Feed
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); 
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
add_filter('the_generator', '__return_empty_string');

/**
 *  @brief Заборонити індексувати сторінки з помилкою 404 end
 */
function wph_noindex_for_404() {
    if( is_404() ) {
        echo '<meta name="robots" content="noindex, follow" />'.PHP_EOL;
    }
}
add_action('wp_head', 'wph_noindex_for_404');

function custom_login_logo(){
    echo '<style type="text/css">h1 a {   background-image: url('.get_bloginfo('template_directory').'/assets/img/KYa_logo_square.svg) !important; width:126px !important; height:84px; background-size:126px 84px !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

/**
 *  @brief Бібліотеки для роботи адмінки
 */
function theme_styles_scripts_admin() {
	wp_enqueue_style( 'perfect-admin', get_template_directory_uri() . '/assets/admin/css/admin.css' );
	wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
	wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/assets/admin/js/admin.js', array(), '1.0', false );
	wp_enqueue_script('jquery-ui-datepicker');
}
add_action( 'admin_enqueue_scripts', 'theme_styles_scripts_admin' );

/**
 *  @brief Бібліотеки для роботи фронтенда
 */
function theme_name_scripts() {

	 wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
	 wp_enqueue_style('fan', get_template_directory_uri().'/assets/css/jquery.fancybox.css');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


function do_hook_assets_footer(){ global $post;
//echo $post->ID;

$uri = explode('/', $_SERVER['REQUEST_URI']);
if($uri[1] == 'news' || $uri[2] == 'news'){
    $no = 1;
}
if($uri[1] == 'building' || $uri[2] == 'building'){
    $con = 1;
}


	wp_enqueue_script( 'jquery-news', get_template_directory_uri().'/assets/js/jquery-2.2.4.min.js' );

	wp_enqueue_script( 'commons', get_template_directory_uri().'/assets/js/script.js' );
    if ($con == 1) {
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js');
    }
    if($uri[0] == '' && (($uri[1] == '' || $uri[1] == 'ru') && $uri[2] == '')){
		//wp_enqueue_script( 'home', get_template_directory_uri().'/assets/js/home.min.js' );
	}
	if ($post->ID==107) {
		//wp_enqueue_script( 'home', get_template_directory_uri().'/assets/js/values.min.js' );
	}
	if ($post->ID==29) {
		wp_enqueue_script( 'rangeSlider', get_template_directory_uri().'/assets/js/ion.rangeSlider.js' );
		wp_enqueue_script( 'range', get_template_directory_uri().'/assets/js/range.js' );
	}
	if ($post->ID==50) {
        ?><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM&sensor=false"></script><?
		if(strpos($_SERVER['REQUEST_URI'], '/ru/') == '/ru/'){wp_enqueue_script( 'map', get_template_directory_uri().'/assets/js/map_ru.js' );}else{wp_enqueue_script( 'map', get_template_directory_uri().'/assets/js/map.js' );}
 
	}




	if (empty($post)) {
		/*404*/
		wp_enqueue_script( 'home', get_template_directory_uri().'/assets/js/architecture.min.js' );
	}
	
} 
add_action('hook_assets_footer', 'do_hook_assets_footer');

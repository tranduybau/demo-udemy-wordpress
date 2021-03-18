<?php

function university_files()
{
//    wp_enqueue_script('main-university-javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('goole_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
//    wp_enqueue_style('university_main_style', get_stylesheet_uri());
    if (strstr($_SERVER['SERVER_NAME'], 'wpsml.local')) {
        wp_enqueue_script('main-university-javascript', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }
}

add_action('wp_enqueue_scripts', 'university_files');
// wp_enqueue_scripts -> lúc khởi tạo nạp file, chạy hàm university_files

function university_features()
{
//    register_nav_menu('headerMenuLocation', 'Header Menu Location'); // đăng ký 1 cái menu (kiểu như nav-header-menu)
//    register_nav_menu('footerExploreMenuLocation', 'Footer Explore Menu Location');
//    register_nav_menu('footerLearnMenuLocation', 'Footer Learn Menu Location');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

//function university_post_types()
//{
//    register_post_type('event', array(
//        'public' => true,
//        'labels' => array(
//            'name' => 'Events',
//        ),
//        'menu_icon' => 'dashicons-calendar-alt',
//    ));
//}
//
//add_action('init', 'university_post_types');

function university_adjust_queries($query) {
	if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
		$today = date('Ymd');

		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', array(
			array(
				'key' => 'event_date',
				'compare' => '>=',
				'value' => $today,
				'type' => 'numeric',
			),
		));
	}
}

add_action('pre_get_posts', 'university_adjust_queries');
<?php

function university_files() {
    wp_enqueue_style('university_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');
// wp_enqueue_scripts -> lúc khởi tạo nạp file, chạy hàm university_files
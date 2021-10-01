<?php
function theme_styles() {
  wp_enqueue_style( 'theme_reset' , 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' , array() , '1.0.0' );
  wp_enqueue_style( 'theme_font' , 'https://fonts.googleapis.com/css?family=Vollkorn:400i' , array( 'theme_reset' ) , '1.0.0' );
	wp_enqueue_style( 'theme_style',  esc_attr( get_template_directory_uri() ).'/assets/css/styles.css', array( 'theme_font' ) , '1.0.0' );
	wp_enqueue_script( 'theme_script', esc_attr( get_template_directory_uri() ).'/assets/js/jquery-3.3.1.min.js', array( 'theme_style' ) , '1.0.0' );
	wp_enqueue_script( 'theme_script', esc_attr( get_template_directory_uri() ).'/assets/js/bundle.js', array( 'theme_style' ) , '1.0.0' );
}
add_action( 'wp_enqueue_scripts' , 'theme_styles' );

register_nav_menus(
  array(
    'global_nav' => 'グローバルナビ',
    'footer_nav' => 'フッターナビ'
  )
);
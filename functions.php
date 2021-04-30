//ここではfuncitons.phpでcss/jsの読み込みについてのコードを書きます。
//wp_enqueue_styleはcssを呼び出せる　オプション　wp_enqueue_style( $handle, $src, $deps, $ver, $media );
//wp_enqueue_scriptはjsを呼び出せる　オプション　wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
/*wordpressではin_footerが初期値falseのためhtmlのidなどをgetしたい時エラーが起こります。動きがjs読み込み>html読み込みになるからです。
そうならないためにin_footerにtureを入れることでerrorが起きなくなります。*/


<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
   
	wp_enqueue_script( 'child-js',
    get_stylesheet_directory_uri() . '/script.js',
    array(),false,true);
}
?>

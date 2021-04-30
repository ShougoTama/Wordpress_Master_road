//ここではfuncitons.phpでcss/jsの読み込みについてのコードを書きます。
//wp_enqueue_styleはcssを呼び出せる　オプション　wp_enqueue_style( $handle, $src, $deps, $ver, $media );
//wp_enqueue_scriptはjsを呼び出せる　オプション　wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
/*wordpressではin_footerが初期値falseのためhtmlのidなどをgetしたい時エラーが起こります。動きがjs読み込み>html読み込みになるからです。
そうならないためにin_footerにtureを入れることでerrorが起きなくなります。*/
/*cssファイルを複数で管理したい場合、例えばメディアごとにcssファイルを分けるなどして使用したい場合、親テーマのフォルダに新規ファイルを制作して、子テーマに継承しなければ子テーマでは使えないことがわかった。
なので子テーマだけにcssファイルを新規で作ったとしてもそれはエラーになってしまします。*/

<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
    
    //style.css以外のcssファイルでのcssコードを実装したい場合
    wp_enqueue_style('parent-common-style',get_template_directory_uri().'/assets/css/common.css');
    wp_enqueue_style( 'main-style',get_stylesheet_directory_uri() . '/common.css',array('parent-common-style'));
    
   //scriptファイルの実装
	wp_enqueue_script( 'child-js',
    get_stylesheet_directory_uri() . '/script.js',
    array(),false,true);
}
?>

<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');

//「Wordpress本体」の自動更新メール通知を停止する
add_filter('auto_core_update_send_email' , '__return_false');
// 「プラグイン」の自動更新メール通知を停止する
add_filter( 'auto_plugin_update_send_email', '__return_false' );
 
// 「テーマ」の自動更新メール通知を停止する
add_filter( 'auto_theme_update_send_email', '__return_false' );


function my_styles()  {
    // page-sample用のCSS
    if ( is_page('profile') ) {
        wp_enqueue_style( 'profile_css', get_template_directory_uri() . '/scss/profile/profile.css');
        }


    if ( is_singular('topics') ) {
        wp_enqueue_style( 'topics_css', get_template_directory_uri() . '/scss/topics/topics.css');
        }

    }
add_action( 'wp_enqueue_scripts', 'my_styles' );


/*------------------------------------*\
    pagenation
\*------------------------------------*/
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ

    //表示テキスト
    $text_first   = "";
    $text_before  = "";
    $text_next    = "";
    $text_last    = "";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination flex flex_start"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="pagination flex"><span class="page_num">', $paged ,'  ', $pages ,'</span>';
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<a class="current pager">', $i ,'</a>';
                } else {
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next futura">', $text_next ,'</a>';
        }
        // if ( $paged + $range < $pages ) {
        //     // 「最後へ」 の表示
        //     echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
        // }
        echo '</div>';
    }
}
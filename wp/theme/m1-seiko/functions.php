<?php

// 更新通知非表示（WordPress本体）
// remove_action('wp_version_check', 'wp_version_check');
// remove_action('admin_init', '_maybe_update_core');
// add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));

// 更新通知非表示（プラグイン）
// remove_action('load-update-core.php', 'wp_update_plugins');
// add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));

// 更新通知非表示（テーマ）
// remove_action('load-update-core.php', 'wp_update_themes');
// add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));


// wp-head不要情報削除（バージョン情報）
remove_action('wp_head', 'wp_generator');

// wp-head不要情報削除（RSS）
remove_action('wp_head', 'feed_links_extra', 3);

// wp-head不要情報削除（パーマリンク）
remove_action('wp_head', 'wp_shortlink_wp_head');

// wp-head不要情報削除（前後記事のURL）
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// wp-head不要情報削除（リモート投稿）
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// wp-head不要情報削除（絵文字）
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// wp-head不要情報削除（REST API）
remove_action('wp_head', 'rest_output_link_wp_head');

// wp-head不要情報削除（Embed）
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// 画像が圧縮されないようにする
//add_filter('jpeg_quality', function($arg){return 100;});

// jquery指定
function my_scripts_method(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

//サイドバーを1つ設置する
// register_sidebar(array(
//             'name'=>'サイドバー',
//             'before_widget'=>'<div class="sidebar-wrapper">',
//             'after_widget'=>'</div>',
//             'before_title' => '<h4 class="sidebar-title">',
//             'after_title' => '</h4>'
// ));



add_filter('bogo_localizable_post_types', 'add_localizable_post_types', 10, 1);
    function add_localizable_post_types($localizable) {
        $localizable[] = 'modelcase';
        return $localizable;
    }

function page_content_e( $page_path, $post_type = 'page' ) {
  $page = get_page_by_path( $page_path, OBJECT, $post_type );
  if ( $page && $page->post_status == 'publish' ) {
    echo apply_filters( 'the_content', $page->post_content );
  }
}


// （タクソノミーと）タームのリンクを取得する
function custom_taxonomies_terms_links(){
  // 投稿 ID から投稿オブジェクトを取得
  $post = get_post( $post->ID );

  // その投稿から投稿タイプを取得
  $post_type = $post->post_type;

  // その投稿タイプからタクソノミーを取得
  $taxonomies = get_object_taxonomies( $post_type, 'objects' );

  $out = array();
  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

    // 投稿に付けられたタームを取得
    $terms = get_the_terms( $post->ID, $taxonomy_slug );

    if ( !empty( $terms ) ) {
     // $out[] = "<h2>" . $taxonomy->label . "</h2>\n<ul>";
      foreach ( $terms as $term ) {
        $out[] =
          '  <li><a href="'
        .    get_term_link( $term->slug, $taxonomy_slug ) .'">'
        .    $term->name
        . "</a></li>\n";
      }
      $out[] = "</ul>\n";
    }
  }

  return implode('', $out );
}

    // アイキャッチ画像の追加（投稿及び固定ページで有効にする）
    add_theme_support( 'post-thumbnails' );
    // アイキャッチ画像のサイズを指定する(trueでトリミング)
    set_post_thumbnail_size( 300, 300, true );

/*　改行の時に自動的にPタグが挿入されるのを防ぐ
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );*/

// <?php wp_head(); を入れた時に勝手にマージンがつくのを防ぐ
add_filter( 'show_admin_bar', '__return_false' );

// 写真の入力欄をシンプルに
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );

function remove_image_attribute( $html ){
    $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
    $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
    $html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
    $html = preg_replace( '/<a href=".+">/', '', $html );
    $html = preg_replace( '/<\/a>/', '', $html );
    return $html;
}

global $wp_rewrite;
$wp_rewrite->flush_rules();

function pagename_class($classes = '') {
    if (is_page()) {
        $page = get_post(get_the_ID());
        $classes[] = $page->post_name;
        if ($page->post_parent) {
            $classes[] = get_page_uri($page->post_parent);
       }
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');

function pagenation($limit = NULL, $post_typed = 'posts') {
    global $wp_rewrite;
    global $paged;
    global $wp_query;

    // 検索条件
    $query = array();
    if ($limit != NULL) {
        $query['posts_per_page'] = $limit;
    }
    if (count($query) != 0) {
        $wp_query->query($query);
    }

    $wp_query->query(array(
        'post_type' => $post_typed,
    ));
    $paginate_base = get_pagenum_link();

    if( strpos( $paginate_base, '?' ) || !$wp_rewrite->using_permalinks() ) {
        $paginate_format = '';
        $paginate_base = add_query_arg( 'paged', '%#%' );
    } else {
        $paginate_format = (substr( $paginate_base, -1, 1 ) == '/' ? '' : '/') . user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }


    if( $paged < 2 ) {
        $paged = 1;
    }
    $args = array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'current' => $paged,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type' => 'array',
    );
    $pagenate_array = paginate_links($args);

    // 配列がある場合のみ
    if (is_array($pagenate_array) == TRUE) {
        $pagenate .= '<div class="wp-pagenavi">';
        foreach ($pagenate_array as $key => $value) {

            if (preg_match('/current/', $value) == TRUE) {
                $class = '';
            }
            else {
                $class = '';
            }

            // $value = "<span class=\"{$class}\">".$value.'</span>';
            // リンク追加
            $pagenate .= $value;
        }

        $pagenate .= '</div>';
        echo $pagenate;
    }
}


function my_img_shortcode() {
    return get_template_directory_uri().'/images/';
}
add_shortcode('img', 'my_img_shortcode');

function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/my_admin_style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );
?>

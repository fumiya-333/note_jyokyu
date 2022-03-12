<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);

require_once get_theme_file_path("/constants.php");
require_once get_theme_file_path("/common_util.php");
require_once get_theme_file_path("/bl_helper.php");
require_once get_theme_file_path("/view_helper.php");

function post_has_archive($args, $post_type) {
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
  }
  return $args;
}

function my_static_breadcrumb_adder($breadcrumb_trail) {
  if(get_post_type() === 'post') {
    // アーカイブページの場合
    if(is_archive()) {
      // カテゴリページでない場合
      if(!is_category()) {
        // ブログ パンくずリスト追加
        $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, NULL, array('post'));
        // トップ 一時退避
        $stuck = array_pop($breadcrumb_trail->breadcrumbs);
        // 投稿削除
        array_pop($breadcrumb_trail->breadcrumbs);
        $breadcrumb_trail->breadcrumbs[] = $item;
        $breadcrumb_trail->breadcrumbs[] = $stuck;
      }
      return;
    }
    if(is_single()) {
      // ブログ パンくずリスト追加
      $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, NULL, array('post'), Constants::BLOG_URL, null, true);
      // トップ 一時退避
      $stuck = array_pop($breadcrumb_trail->breadcrumbs);
      $breadcrumb_trail->breadcrumbs[] = $item;
      $breadcrumb_trail->breadcrumbs[] = $stuck;
      return;
    }
  }
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');
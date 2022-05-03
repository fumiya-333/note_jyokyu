<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
remove_filter("the_content", "wpautop");

require_once get_theme_file_path("commons/constants.php");
require_once get_theme_file_path("commons/common-util.php");
require_once get_theme_file_path("commons/bl-helper.php");
require_once get_theme_file_path("commons/view-helper.php");

/**
 * 投稿アーカイブページの作成
 *
 * @param [type] $args
 * @param [type] $post_type 投稿タイプ
 * @return void
 */
function post_has_archive($args, $post_type)
{
    if ("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "blog";
    }
    return $args;
}

function my_static_breadcrumb_adder($breadcrumb_trail)
{
    if (get_post_type() === "post") {
        // アーカイブページの場合
        if (is_archive()) {
            // カテゴリページでない場合
            if (!is_category()) {
                delete_breadcrumb_title_post($breadcrumb_trail);
            } else {
                add_breadcrumb_title_blog($breadcrumb_trail);
            }
            return;
        }
        if (is_single()) {
            add_breadcrumb_title_blog($breadcrumb_trail);
            return;
        }
    }
}

function delete_breadcrumb_title_post($breadcrumb_trail)
{
    // ブログ パンくずリスト追加
    $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"));
    // トップ 一時退避
    $stuck = array_pop($breadcrumb_trail->breadcrumbs);
    // 投稿削除
    array_pop($breadcrumb_trail->breadcrumbs);
    $breadcrumb_trail->breadcrumbs[] = $item;
    $breadcrumb_trail->breadcrumbs[] = $stuck;
}

function add_breadcrumb_title_blog($breadcrumb_trail)
{
    // ブログ パンくずリスト追加
    $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"), Constants::BLOG_URL, null, true);
    // トップ 一時退避
    $stuck = array_pop($breadcrumb_trail->breadcrumbs);
    $breadcrumb_trail->breadcrumbs[] = $item;
    $breadcrumb_trail->breadcrumbs[] = $stuck;
}

function error_message($error, $key, $rule)
{
    if ($key === Constants::KEY_COMPANY_NAME && $rule === "noempty") {
        return Constants::COMPANY . Constants::INPUT_ERR_MSG;
    }
    if ($key === Constants::KEY_NAME && $rule === "noempty") {
        return Constants::NAME . Constants::INPUT_ERR_MSG;
    }
    if ($key === Constants::KEY_EMAIL && $rule === "noempty") {
        return Constants::EMAIL . Constants::INPUT_ERR_MSG;
    }
    if ($key === Constants::KEY_PHONE_NUMBER && $rule === "noempty") {
        return Constants::PHONE_NUMBER . Constants::INPUT_ERR_MSG;
    }
    if ($key === Constants::KEY_CONTACT_KINDS && $rule === "required") {
        return Constants::CONTACT_KINDS . Constants::SELECT_ERR_MSG;
    }
    if ($key === Constants::KEY_CONTACT_CONTENT && $rule === "noempty") {
        return Constants::CONTACT_CONTENT . Constants::INPUT_ERR_MSG;
    }
    if ($key === Constants::KEY_PRIVACY_POLICY_AGREE && $rule === "required") {
        return Constants::PRIVACY_POLICY_AGREE . Constants::CHECK_ERR_MSG;
    }
    return $error;
}

function theme_setup()
{
    add_theme_support("post-thumbnails");
}

add_filter("register_post_type_args", "post_has_archive", 10, 2);
add_action("bcn_after_fill", "my_static_breadcrumb_adder");
add_filter("show_admin_bar", "__return_false");
add_action("after_setup_theme", "theme_setup");

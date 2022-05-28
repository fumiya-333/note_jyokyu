<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
read_files();

function read_files()
{
    $file_names = glob(get_template_directory() . "/libs/*");
    foreach ($file_names as $file_name) {
        if(preg_match('/\.php$/i', basename($file_name))){
            require_once $file_name;
        }
    }
}

function theme_setup()
{
    add_theme_support("post-thumbnails");

    variable_setup();
}

function variable_setup()
{
    $GLOBALS["BL_HELPER"] = BlHelper::getInstance();

    /**
     * ヒアドキュメント内関数展開用変数
     *
     * @param $expression
     * @return $expression
     */
    $GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"] = function ($expression) {
        return $expression;
    };
}

/**
 * パンくずリストの設定
 *
 * @param [type] $breadcrumb_trail パンくずリスト
 * @return void
 */
function my_static_breadcrumb_adder($breadcrumb_trail)
{
    if (get_post_type() === "post") {
        // アーカイブページの場合
        if (is_archive()) {
            // カテゴリページでない場合
            if (!is_category()) {
                delete_post_el_with_add_blog_el_breadcrumb($breadcrumb_trail);
            } else {
                add_blog_el_breadcrumb($breadcrumb_trail);
            }
            return;
        }
        // 投稿ページの場合
        if (is_single()) {
            add_blog_el_breadcrumb($breadcrumb_trail);
            return;
        }
    }
}

/**
 * * パンくずリスト 投稿要素削除・ブログ要素追加
 *
 * @param [type] $breadcrumb_trail パンくずリスト
 * @return void
 */
function delete_post_el_with_add_blog_el_breadcrumb($breadcrumb_trail)
{
    // パンくずリスト ブログ要素作成
    $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"));
    // パンくずリスト要素一時退避
    $stuck = array_pop($breadcrumb_trail->breadcrumbs);
    // パンくずリスト 投稿要素削除
    array_pop($breadcrumb_trail->breadcrumbs);
    // パンくずリスト ブログ要素追加
    $breadcrumb_trail->breadcrumbs[] = $item;
    // パンくずリスト トップ要素戻す
    $breadcrumb_trail->breadcrumbs[] = $stuck;
}

/**
 * パンくずリスト ブログ要素追加
 *
 * @param [type] $breadcrumb_trail パンくずリスト
 * @return void
 */
function add_blog_el_breadcrumb($breadcrumb_trail)
{
    // パンくずリスト ブログ要素作成
    $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"), Constants::BLOG_URL, null, true);
    // パンくずリスト要素一時退避
    $stuck = array_pop($breadcrumb_trail->breadcrumbs);
    // パンくずリスト ブログ要素追加
    $breadcrumb_trail->breadcrumbs[] = $item;
    // パンくずリスト トップ要素戻す
    $breadcrumb_trail->breadcrumbs[] = $stuck;
}

/**
 * 投稿アーカイブページの作成
 *
 * @param [type] $args
 * @param [type] $post_type 投稿
 * @return $args
 */
function post_has_archive($args, $post_type)
{
    if ("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "blog";
    }
    return $args;
}

/**
 * エラーメッセージの設定
 *
 * @param [type] $error エラーオブジェクト
 * @param [type] $key キー
 * @param [type] $rule ルール
 * @return エラーオブジェクト
 */
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

add_action("after_setup_theme", "theme_setup");
add_action("bcn_after_fill", "my_static_breadcrumb_adder");

add_filter("show_admin_bar", "__return_false");
add_filter("register_post_type_args", "post_has_archive", 10, 2);
add_filter("mwform_error_message_mw-wp-form-" . Constants::FORM_ID_CONTACT, "error_message", 10, 3);

remove_filter("the_content", "wpautop");

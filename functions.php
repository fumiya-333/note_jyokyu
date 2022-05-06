<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
read_files();

function read_files()
{
    $file_names = glob(get_template_directory() . "/commons/*");
    foreach ($file_names as $file_name) {
        require_once $file_name;
    }
}

function theme_setup()
{
    add_theme_support("post-thumbnails");

    variable_setup();
}

function variable_setup()
{
    $GLOBALS["bl_helper"] = BlHelper::getInstance();

    /**
     * ヒアドキュメント内関数展開用変数
     *
     * @param $expression
     * @return $expression
     */
    $GLOBALS["call_hear_doc_deploy_func"] = function ($expression) {
        return $expression;
    };
}

function my_static_breadcrumb_adder($breadcrumb_trail)
{
    CommonUtil::updateBreadcrumb($breadcrumb_trail);
}

function post_has_archive($args, $post_type)
{
    return CommonUtil::postHasArchive($args, $post_type);
}

function error_message($error, $key, $rule)
{
    return CommonUtil::errorMessage($error, $key, $rule);
}

add_action("after_setup_theme", "theme_setup");
add_action("bcn_after_fill", "my_static_breadcrumb_adder");

add_filter("show_admin_bar", "__return_false");
add_filter("register_post_type_args", "post_has_archive", 10, 2);
add_filter("mwform_error_message_mw-wp-form-" . Constants::FORM_ID_CONTACT, "error_message", 10, 3);

remove_filter("the_content", "wpautop");

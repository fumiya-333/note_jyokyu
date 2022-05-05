<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
remove_filter("the_content", "wpautop");

require_once get_theme_file_path("commons/constants.php");
require_once get_theme_file_path("commons/common-util.php");
require_once get_theme_file_path("commons/bl-helper.php");

function theme_setup()
{
    add_theme_support("post-thumbnails");
}

function post_has_archive($args, $post_type)
{
    return CommonUtil::postHasArchive($args, $post_type);
}

function my_static_breadcrumb_adder($breadcrumb_trail)
{
    CommonUtil::updateBreadcrumb($breadcrumb_trail);
}

function error_message($error, $key, $rule)
{
    return CommonUtil::errorMessage($error, $key, $rule);
}

add_filter("show_admin_bar", "__return_false");
add_action("after_setup_theme", "theme_setup");
add_filter("register_post_type_args", "post_has_archive", 10, 2);
add_action("bcn_after_fill", "my_static_breadcrumb_adder");
add_filter("mwform_error_message_mw-wp-form-" . Constants::FORM_ID_CONTACT, "error_message", 10, 3);

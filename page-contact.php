<?php
add_filter("mwform_error_message_mw-wp-form-" . Constants::FORM_ID_CONTACT, "error_message", 10, 3);
$args = [
  "component_names" => [
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_CONTACT),
  ],
  "hero_fix_title" => "お問い合わせ・資料請求",
  "hero_fix_bg_img" => Constants::TEMP_DIR_IMG . "/cta.jpeg"
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_PAGE_TEMPLATE), null, $args);

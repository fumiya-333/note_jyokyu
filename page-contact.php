<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_CONTACT),
  ],
  "hero_fix_title" => "お問い合わせ・資料請求",
  "hero_fix_bg_img" => Constants::TMP_DIR_URI_IMG . "/cta.jpeg"
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_PAGE_TEMPLATE), null, $args);

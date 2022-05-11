<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_CORRECT),
  ],
  "hero_fix_title" => "お知らせ",
  "hero_fix_bg_img" => Constants::TMP_DIR_URI_IMG . "/correct.jpg",
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_PAGE_TEMPLATE), null, $args);

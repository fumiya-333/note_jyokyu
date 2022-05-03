<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_BLOG),
  ],
  "hero_fix_title" => "ブログ",
  "hero_fix_bg_img" => Constants::TEMP_DIR_IMG . "/blog.png",
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_PAGE_TEMPLATE), null, $args);

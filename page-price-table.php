<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_PRICE_TABLE),
  ],
  "hero_fix_title" => "コース・料金",
  "hero_fix_bg_img" => Constants::TMP_DIR_URI_IMG . "/plan.jpeg"
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_PAGE_TEMPLATE), null, $args);

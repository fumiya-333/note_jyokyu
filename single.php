<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_ARTICLE),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_ARTICLE_PICKUP),
  ]
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_SIDEBAR_TEMPLATE), null, $args);

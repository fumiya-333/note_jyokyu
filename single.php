<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_ARTICLE),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_ARTICLE_PICKUP),
  ]
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_BLOG_TEMPLATE), null, $args);

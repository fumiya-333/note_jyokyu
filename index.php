<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_TOEFL_STUDY),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_TOEFL_STRONG),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_PRICE),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_TOEFL_SUCCESS_STORIES),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_USE_FLOW),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_QA),
    CommonUtil::joinDirPathProjects(Constants::FILE_PATH_POST)]
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_INDEX_TEMPLATE), null, $args);

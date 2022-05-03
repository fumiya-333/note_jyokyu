<?php
$args = [
  "component_names" => [
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_TOEFL_STUDY),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_TOEFL_STRONG),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_PRICE),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_TOEFL_SUCCESS_STORIES),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_USE_FLOW),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_QA),
    CommonUtil::joinDirPathConponents(Constants::FILE_PATH_POST)]
];

get_template_part(CommonUtil::joinDirPathTemplates(Constants::FILE_PATH_INDEX_TEMPLATE), null, $args);

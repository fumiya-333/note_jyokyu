<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
define("TITLE", "Engress");
define("HOME_URL", esc_url(home_url()));
define("NOTICE_URL", HOME_URL . "/notice");
define("BLOG_URL", HOME_URL . "/blog");
define("PRICE_URL", HOME_URL . "/price");
define("CONTACT_URL", HOME_URL . "/contact");

define("PAGE_ID_PRICE_TABLE", 2149);
define("PAGE_ID_TOEFL_SUCCESS_STORIES", 2126);

function get_current_link(){
  $current_link = (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  if(substr($current_link, 0, -1) === "/"){
    return substr($current_link, 0, -1);
  }
  return $current_link;
}
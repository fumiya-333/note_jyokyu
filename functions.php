<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
define("TITLE", "Engress");
define("ESC_HOME_URL", esc_url(home_url()));
define("HOME_URL", ESC_HOME_URL . "/toefl_success/engress");
define("NOTICE_URL", ESC_HOME_URL . "/notice");
define("BLOG_URL", ESC_HOME_URL . "/blog");
define("PRICE_URL", ESC_HOME_URL . "/price");
define("CONTACT_URL", ESC_HOME_URL . "/contact");

function get_current_link(){
  $current_link = (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  if(substr($current_link, 0, -1) === "/"){
    return substr($current_link, 0, -1);
  }
  return $current_link;
}
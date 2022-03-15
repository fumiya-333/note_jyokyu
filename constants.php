<?php
define("HOME_URL", esc_url(home_url()));

class Constants {
  const TITLE = "Engress";
  const CORRECT_URL = HOME_URL . "/correct";
  const BLOG_URL = HOME_URL . "/blog";
  const PRICE_URL = HOME_URL . "/price";
  const CONTACT_URL = HOME_URL . "/contact";

  const PAGE_ID_PRICE_TABLE = 2149;
  const PAGE_ID_TOEFL_SUCCESS_STORIES = 2126;

  const BREADCLUMB_TITLE_BLOG = "ブログ";

  /**
   * 定数を配列として全て取得する
   */
  public static function getConstants() {
    $oClass = new ReflectionClass(__CLASS__);

    return $oClass->getConstants();
  }
}
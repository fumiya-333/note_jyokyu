<?php
define("HOME_URL", esc_url(home_url()));

class Constants {
  const TITLE = "Engress";
  const CORRECT_URL = HOME_URL . "/correct";
  const BLOG_URL = HOME_URL . "/blog";
  const PRICE_URL = HOME_URL . "/price";
  const CONTACT_URL = HOME_URL . "/contact";

  const KEY_COMPANY_NAME = "company-name";
  const KEY_NAME = "name";
  const KEY_EMAIL = "email";
  const KEY_PHONE_NUMBER = "phone-number";
  const KEY_CONTACT_KINDS = "form-radio";
  const KEY_CONTACT_CONTENT = "textarea-contact";
  const KEY_PRIVACY_POLICY_AGREE = "privacy-policy-agree";
  const KEY_ERROR = "error";
  const KEY_INPUT_ERROR = "input-error";

  const PAGE_ID_PRICE_TABLE = 2149;
  const PAGE_ID_TOEFL_SUCCESS_STORIES = 2126;
  const FORM_ID_CONTACT = 2198;

  const BREADCLUMB_TITLE_BLOG = "ブログ";

  const COMPANY = "会社名";
  const NAME = "氏名";
  const EMAIL = "メールアドレス";
  const PHONE_NUMBER = "電話番号";
  const CONTACT_KINDS = "お問い合わせの種類";
  const CONTACT_CONTENT = "お問い合わせ内容";
  const PRIVACY_POLICY_AGREE = "プライバシーポリシー";

  const INPUT_ERR_MSG = "を入力してください";
  const SELECT_ERR_MSG = "を選択してください";
  const CHECK_ERR_MSG = "にチェックを入れてください";

  /**
   * 定数を配列として全て取得する
   */
  public static function getConstants() {
    $oClass = new ReflectionClass(__CLASS__);

    return $oClass->getConstants();
  }
}

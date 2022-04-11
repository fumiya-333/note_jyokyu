<?php
class Constants {
  const TITLE = "Engress";

  const RATE_PLUN_SLUG = "rate-plun";

  const CORRECT_URL = HOME_URL . "/correct";
  const BLOG_URL = HOME_URL . "/blog";
  const RATE_PLUN_URL = HOME_URL . "/rate-plun";
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

  /** 電話番号 */
  const PHONE_NUMBER_VAL = "0123-456-7890";

  /** 料金表ページID */
  const PAGE_ID_PRICE_TABLE = 2149;
  /** TOEFL成功事例ページID */
  const PAGE_ID_TOEFL_SUCCESS_STORIES = 2126;
  /** お問い合わせフォームID */
  const FORM_ID_CONTACT = 2198;

  /**
   * 定数を配列として全て取得する
   */
  public static function getConstants() {
    $oClass = new ReflectionClass(__CLASS__);

    return $oClass->getConstants();
  }
}

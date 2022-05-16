<?php
class Constants
{
    /** タイトル */
    const TITLE = "Engress";

    /** フォルダパス レイアウト */
    const DIR_PATH_LAYOUTS = "/layouts";
    /** フォルダパス プロジェクト */
    const DIR_PATH_PROJECTS = "/projects";
    /** フォルダパス テンプレート */
    const DIR_PATH_TEMPLATES = "/templates";
    /** フォルダパス ライブラリ */
    const DIR_PATH_LIBS = "/libs";

    /** ファイルパス ヘッダ */
    const FILE_PATH_HEAD = "/head";
    /** ファイルパス スクリプト */
    const FILE_PATH_SCRIPT = "/script";
    /** ファイルパス トップ背景画像 */
    const FILE_PATH_HERO = "/hero";
    /** ファイルパス パンくずリスト */
    const FILE_PATH_BREADCRUMBS = "/breadcrumbs";
    /** ファイルパス 資料請求背景画像 */
    const FILE_PATH_DOC_REQ = "/doc-req";
    /** ファイルパス 電話番号 */
    const FILE_PATH_PHONE_LINK = "/phone-link";
    /** ファイルパス TOEFL学習特化 */
    const FILE_PATH_TOEFL_STUDY = "/toefl-study";
    /** ファイルパス TOEFL強み */
    const FILE_PATH_TOEFL_STRONG = "/toefl-strong";
    /** ファイルパス 価格表 */
    const FILE_PATH_PRICE_TABLE = "/price-table";
    /** ファイルパス TOEFL成功事例 */
    const FILE_PATH_TOEFL_SUCCESS_STORIES = "/toefl-success-stories";
    /** ファイルパス ご利用の流れ */
    const FILE_PATH_USE_FLOW = "/use-flow";
    /** ファイルパス よくある質問 */
    const FILE_PATH_QA = "/qa";
    /** ファイルパス ブログとお知らせ */
    const FILE_PATH_POST = "/post";
    /** ファイルパス ブログ */
    const FILE_PATH_BLOG = "/blog";
    /** ファイルパス お知らせ */
    const FILE_PATH_CORRECT = "/correct";
    /** ファイルパス 価格 */
    const FILE_PATH_PRICE = "/price";
    /** ファイルパス 記事 */
    const FILE_PATH_ARTICLE = "/article";
    /** ファイルパス ピックアップ記事 */
    const FILE_PATH_ARTICLE_PICKUP = "/article-pickup";
    /** ファイルパス お知らせ記事 */
    const FILE_PATH_ARTICLE_CORRECT = "/article-correct";
    /** ファイルパス お問い合わせ */
    const FILE_PATH_CONTACT = "/contact";
    /** ファイルパス お問い合わせ完了 */
    const FILE_PATH_THANKS = "/thanks";
    /** ファイルパス ページネーション */
    const FILE_PATH_PAGINATE = "/paginate";
    /** ファイルパス インデックステンプレート */
    const FILE_PATH_INDEX_TEMPLATE = "/index-template";
    /** ファイルパス ページテンプレート */
    const FILE_PATH_PAGE_TEMPLATE = "/page-template";
    /** ファイルパス サイドバーありテンプレート */
    const FILE_PATH_BLOG_TEMPLATE = "/blog-template";

    /** お知らせ画面 URL */
    const CORRECT_URL = HOME_URL . self::FILE_PATH_CORRECT;
    /** ブログ画面 URL */
    const BLOG_URL = HOME_URL . self::FILE_PATH_BLOG;
    /** 価格表画面 URL */
    const PRICE_TABLE_URL = HOME_URL . self::FILE_PATH_PRICE_TABLE;
    /** お問い合わせ画面 URL */
    const CONTACT_URL = HOME_URL . self::FILE_PATH_CONTACT;

    /** cssディレクトリパス */
    const TMP_DIR_URI_CSS = TMP_DIR_URI . "/css";
    /** imgディレクトリパス */
    const TMP_DIR_URI_IMG = TMP_DIR_URI . "/img";
    /** jsディレクトリパス */
    const TMP_DIR_URI_JS = TMP_DIR_URI . "/js";

    /** 会社名 キー */
    const KEY_COMPANY_NAME = "company-name";
    /** 氏名 キー */
    const KEY_NAME = "name";
    /** メールアドレス キー */
    const KEY_EMAIL = "email";
    /** 電話番号 キー */
    const KEY_PHONE_NUMBER = "phone-number";
    /** お問い合わせの種類 キー */
    const KEY_CONTACT_KINDS = "form-radio";
    /** お問い合わせ内容 キー */
    const KEY_CONTACT_CONTENT = "textarea-contact";
    /** プライバシーポリシー キー */
    const KEY_PRIVACY_POLICY_AGREE = "privacy-policy-agree";

    /** エラー キー */
    const KEY_ERROR = "error";
    /** 入力エラー キー */
    const KEY_INPUT_ERROR = "input-error";

    /** ブログタイトル パンくずリスト */
    const BREADCLUMB_TITLE_BLOG = "ブログ";

    /** 会社名 名称 */
    const COMPANY = "会社名";
    /** 氏名 名称 */
    const NAME = "氏名";
    /** メールアドレス 名称 */
    const EMAIL = "メールアドレス";
    /** 電話番号 名称 */
    const PHONE_NUMBER = "電話番号";
    /** お問い合わせの種類 名称 */
    const CONTACT_KINDS = "お問い合わせの種類";
    /** お問い合わせ内容 名称 */
    const CONTACT_CONTENT = "お問い合わせ内容";
    /** プライバシーポリシー 名称 */
    const PRIVACY_POLICY_AGREE = "プライバシーポリシー";

    /** 入力エラーメッセージ */
    const INPUT_ERR_MSG = "を入力してください";
    /** セレクトボックスエラーメッセージ */
    const SELECT_ERR_MSG = "を選択してください";
    /** チェックボックスエラーメッセージ */
    const CHECK_ERR_MSG = "にチェックを入れてください";

    /** 電話番号 */
    const PHONE_NUMBER_VAL = "0123-456-7890";
    /** 営業時間 */
    const ACTIVE_TIME = "平日08:00~20:00";

    /** 料金表ページID */
    const PAGE_ID_PRICE_TABLE = 2149;
    /** TOEFL成功事例ページID */
    const PAGE_ID_TOEFL_SUCCESS_STORIES = 2126;
    /** お問い合わせフォームID */
    const FORM_ID_CONTACT = 2198;

    /**
     * 定数を配列として全て取得する
     *
     * @return 定数リスト
     */
    public static function getConstants()
    {
        $oClass = new ReflectionClass(__CLASS__);

        return $oClass->getConstants();
    }
}

<?php
class CommonUtil
{
    /**
     * 投稿アーカイブページの作成
     *
     * @param [type] $args
     * @param [type] $post_type 投稿タイプ
     * @return $args
     */
    public static function postHasArchive($args, $post_type)
    {
        if ("post" == $post_type) {
            $args["rewrite"] = true;
            $args["has_archive"] = "blog";
        }
        return $args;
    }

    /**
     * パンくずリスト更新
     *
     * @param [type] $breadcrumb_trail パンくずリスト
     * @return void
     */
    public static function updateBreadcrumb($breadcrumb_trail)
    {
        if (get_post_type() === "post") {
            // アーカイブページの場合
            if (is_archive()) {
                // カテゴリページでない場合
                if (!is_category()) {
                    self::deletePostElWithAddBlogElBreadcrumb($breadcrumb_trail);
                } else {
                    self::addBlogElBreadcrumb($breadcrumb_trail);
                }
                return;
            }
            // 投稿ページの場合
            if (is_single()) {
                self::addBlogElBreadcrumb($breadcrumb_trail);
                return;
            }
        }
    }

    /**
     * エラーメッセージの設定
     *
     * @param [type] $error エラーオブジェクト
     * @param [type] $key キー
     * @param [type] $rule ルール
     * @return エラーオブジェクト
     */
    public static function errorMessage($error, $key, $rule)
    {
        if ($key === Constants::KEY_COMPANY_NAME && $rule === "noempty") {
            return Constants::COMPANY . Constants::INPUT_ERR_MSG;
        }
        if ($key === Constants::KEY_NAME && $rule === "noempty") {
            return Constants::NAME . Constants::INPUT_ERR_MSG;
        }
        if ($key === Constants::KEY_EMAIL && $rule === "noempty") {
            return Constants::EMAIL . Constants::INPUT_ERR_MSG;
        }
        if ($key === Constants::KEY_PHONE_NUMBER && $rule === "noempty") {
            return Constants::PHONE_NUMBER . Constants::INPUT_ERR_MSG;
        }
        if ($key === Constants::KEY_CONTACT_KINDS && $rule === "required") {
            return Constants::CONTACT_KINDS . Constants::SELECT_ERR_MSG;
        }
        if ($key === Constants::KEY_CONTACT_CONTENT && $rule === "noempty") {
            return Constants::CONTACT_CONTENT . Constants::INPUT_ERR_MSG;
        }
        if ($key === Constants::KEY_PRIVACY_POLICY_AGREE && $rule === "required") {
            return Constants::PRIVACY_POLICY_AGREE . Constants::CHECK_ERR_MSG;
        }
        return $error;
    }

    /**
     * JS定数リスト取得
     *
     * @return JS定数リスト
     */
    public static function getAllJsConstants()
    {
        $ret = "function Constants(){}; ";
        foreach (Constants::getConstants() as $key => $value) {
            $ret .= "Constants.{$key} = '{$value}'; ";
        }
        return $ret;
    }

    /**
     * ファイルパスとコンポーネントフォルダパスを結合
     *
     * @param [type] $file_path ファイルパス
     * @return ファイルパス（コンポーネントフォルダパス結合）
     */
    public static function joinDirPathComponents($file_path)
    {
        return Constants::DIR_PATH_COMPONENTS . $file_path;
    }

    /**
     * ファイルパスとプロジェクトフォルダパスを結合
     *
     * @param [type] $file_path ファイルパス
     * @return ファイルパス（プロジェクトフォルダパス結合）
     */
    public static function joinDirPathProjects($file_path)
    {
        return Constants::DIR_PATH_PROJECTS . $file_path;
    }

    /**
     * ファイルパスとテンプレートフォルダパスを結合
     *
     * @param [type] $file_path ファイルパス
     * @return ファイルパス（テンプレートフォルダパス結合）
     */
    public static function joinDirPathTemplates($file_path)
    {
        return Constants::DIR_PATH_TEMPLATES . $file_path;
    }

    /**
     * ファイルパスとライブラリフォルダパスを結合
     *
     * @param [type] $file_path ファイルパス
     * @return ファイルパス（ライブラリフォルダパス結合）
     */
    public static function joinDirPathLibs($file_path)
    {
        return Constants::DIR_PATH_LIBS . $file_path;
    }

    /**
     * パンくずリスト 投稿要素削除・ブログ要素追加
     *
     * @param [type] $breadcrumb_trail パンくずリスト
     * @return void
     */
    private static function deletePostElWithAddBlogElBreadcrumb($breadcrumb_trail)
    {
        // パンくずリスト ブログ要素作成
        $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"));
        // パンくずリスト要素一時退避
        $stuck = array_pop($breadcrumb_trail->breadcrumbs);
        // パンくずリスト 投稿要素削除
        array_pop($breadcrumb_trail->breadcrumbs);
        // パンくずリスト ブログ要素追加
        $breadcrumb_trail->breadcrumbs[] = $item;
        // パンくずリスト トップ要素戻す
        $breadcrumb_trail->breadcrumbs[] = $stuck;
    }

    /**
     * パンくずリスト ブログ要素追加
     *
     * @param [type] $breadcrumb_trail パンくずリスト
     * @return void
     */
    private static function addBlogElBreadcrumb($breadcrumb_trail)
    {
        // パンくずリスト ブログ要素作成
        $item = new bcn_breadcrumb(Constants::BREADCLUMB_TITLE_BLOG, null, array("post"), Constants::BLOG_URL, null, true);
        // パンくずリスト要素一時退避
        $stuck = array_pop($breadcrumb_trail->breadcrumbs);
        // パンくずリスト ブログ要素追加
        $breadcrumb_trail->breadcrumbs[] = $item;
        // パンくずリスト トップ要素戻す
        $breadcrumb_trail->breadcrumbs[] = $stuck;
    }
}

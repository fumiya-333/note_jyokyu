<?php
class CommonUtil
{
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
     * サムネイルURLを取得
     *
     * @return サムネイルURL
     */
    public static function getPostThumbnailUrl()
    {
        return get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : Constants::TMP_DIR_URI_IMG . "/noimage.png";
    }

    /**
     * 選択しているカテゴリを取得
     *
     * @return カテゴリ
     */
    public static function getCurrentCategory()
    {
        return is_category() ? get_category(get_query_var("cat")) : "";
    }

    /**
     * ページ番号を取得
     *
     * @return ページ番号
     */
    public static function getQueryPaged()
    {
        return get_query_var("paged") ? get_query_var("paged") : 1;
    }
}

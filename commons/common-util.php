<?php
class CommonUtil
{
    /**
     * JS定数リスト取得
     *
     * @return JS定数リスト
     */
    public static function getAllConstants()
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
    public static function joinDirPathConponents($file_path)
    {
        return Constants::DIR_PATH_COMPONENTS . $file_path;
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
}

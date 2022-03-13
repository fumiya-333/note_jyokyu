<?php
class ViewHelper {

  /**
   * トップページ ブログ一覧取得
   *
   * @param string $result ブログ一覧
   * @param string $category カテゴリ
   * @param string $thumbnail_url サムネイルURL
   * @param string $permalink パーマリンク
   * @param string $title タイトル
   * @param string $time 日時
   * @param string $content コンテンツ
   * @return void
   */
  public static function getPostBlogList(string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
    $result .= <<< RESULT
      <article class="blog-row">
        <div class="blog-img-box" style="background-image: url({$thumbnail_url});">
          <div class="blog-category">
            {$category[0]->cat_name}
          </div>
        </div>
        <div class="blog-text-box">
          <div class="blog-row-title"><a href="{$permalink}">{$title}</a></div>
          <div class="blog-date">{$time}</div>
        </div>
      </article>
RESULT;
  }

  /**
    * トップページ お知らせ一覧取得
    *
    * @param string $result お知らせ一覧
    * @param string $thumbnail_url サムネイルURL
    * @param string $permalink パーマリンク
    * @param string $title タイトル
    * @param string $time 日時
    * @return void
    */
  public static function getPostCorrectList(string &$result, $thumbnail_url, $permalink, $title, $time) {
    $result .= <<< RESULT
      <article class="correct-row">
        <div class="correct-date">{$time}</div>
        <div class="correct-row-title"><a href="{$permalink}">{$title}</a></div>
      </article>
RESULT;
  }

  /**
    * ブログ一覧の取得
    *
    * @param [type] $result ブログ一覧
    * @param [type] $category カテゴリ
    * @param [type] $thumbnail サムネイル
    * @param [type] $permalink パーマリンク
    * @param [type] $title タイトル
    * @param [type] $time 日時
    * @param [type] $content コンテンツ
    * @return void
    */
  public static function getBlogList(&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
    $result .= <<< RESULT
      <article class="blog-row">
        <div class="blog-img-box" style="background-image: url({$thumbnail_url});">
          <div class="blog-category">
            {$category[0]->cat_name}
          </div>
        </div>
        <div class="blog-text-box">
          <div class="blog-date">{$time}</div>
          <div class="blog-row-title"><a href="{$permalink}">{$title}</a></div>
          <div class="blog-content">{$content}</div>
        </div>
      </article>
RESULT;
  }

  /**
   * ページネーションの取得
   *
   * @param [type] $args
   * @param [type] $paged
   * @return void
   */
  public static function getPaginate($args) {
    global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }

    $args["base"] = $paginate_base;
    $args["format"] = $paginate_format;
    $paginate = paginate_links($args);

    return <<< RESULT
      <div class="pagination">
        <div class="pnavi">
          {$paginate}
        </div>
      </div>
RESULT;
  }

  public static function getConnectionBlogList(&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
    $result .= <<< RESULT
      <article class="blog-connection-row">
        <div class="blog-connection-img-box">
          <img src="{$thumbnail_url}" width="100" height="70">
        </div>
        <div class="blog-connection-text-box">
          <div class="blog-row-title"><a href="{$permalink}">{$title}</a></div>
        </div>
      </article>
RESULT;
  }
}

<?php
class BlHelper {

  /** インスタンス */
  private static $instance = false;
  /** クエリオブジェクト */
  private $wp_query;

  /**
   * インスタンス取得
   *
   * @return void
   */
  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  /**
   * クエリオブジェクト取得
   *
   * @return void
   */
  public function getWpQuery() {
    return $this->wp_query;
  }

  /**
   * 投稿一覧取得処理実行
   *
   * @param string $args 検索条件
   * @param callable $callback コールバック
   * @return void
   */
  public function execGetWpQuery(array $args, callable $callback) {
    $result = "";
    $this->wp_query = new WP_Query($args);
    if ($this->wp_query->have_posts()){
      while ($this->wp_query->have_posts()){
        $this->wp_query->the_post();
        $callback($result,
          get_the_category(), 
          get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/img/noimage.png",
          get_the_permalink(),
          get_the_title(),
          get_the_time(get_option('date_format')),
          get_the_excerpt()
        );
      }
    }
    wp_reset_postdata();
    return $result;
  }

}

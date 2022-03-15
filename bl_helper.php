<?php
class BlHelper {

  private $wp_query;
  private $my_posts;

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
          has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/img/noimage.png",
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

  /**
   * カスタム投稿一覧取得処理実行
   *
   * @param array $args 検索条件
   * @param callable $callback コールバック
   * @return void
   */
  public function execGetCustomPosts(array $args, callable $callback) {
    $result = "";
    $this->my_posts = get_posts($args);
    foreach ($this->my_posts as $post) {
      setup_postdata($post);
      $callback($result,
        $post->guid,
        $post->post_title,
        mysql2date('Y-m-d', $post->post_date)
      );
    }
    wp_reset_postdata();
    return $result;
  }

}

<?php
class BlHelper
{

  /** インスタンス */
    private static $instance = false;
    /** クエリオブジェクト */
    private $wp_query;

    /**
     * インスタンス取得
     *
     * @return void
     */
    public static function getInstance()
    {
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
    public function getWpQuery()
    {
        return $this->wp_query;
    }

    /**
     * 投稿一覧取得処理実行
     *
     * @param string $sch_args 検索条件
     * @param callable $callback コールバック
     * @return void
     */
    public function execGetWpQuery(array $sch_args, callable $callback)
    {
        $this->wp_query = new WP_Query($sch_args);
        if ($this->wp_query->have_posts()) {
            while ($this->wp_query->have_posts()) {
                $this->wp_query->the_post();
                $callback($sch_args);
            }
        }
        wp_reset_postdata();
    }
}

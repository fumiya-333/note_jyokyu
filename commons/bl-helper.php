<?php
class BlHelper
{

    /** インスタンス */
    private static $instance = false;

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
     * 投稿一覧取得処理実行
     *
     * @param string $args 検索条件
     * @param callable $callback コールバック
     * @return void
     */
    public function execWpQuery(array $args, callable $callback)
    {
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $callback();
            }
        }
        wp_reset_postdata();

        return $wp_query;
    }
}

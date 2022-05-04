<?php
$bl_helper = BlHelper::getInstance();
$category = get_the_category();
?>
<aside class="l-sidebar">
  <div class="l-sidebar__title">関連記事</div>
  <div class="l-sidebar__connection-article-list">
    <?php
    echo $bl_helper->execGetWpQuery(
    array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'cat' => $category[0]->cat_ID
      ),
    function (&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
              <article class="l-sidebar__connection-article-list__row">
                <div class="l-sidebar__connection-article-list__row__img">
                  <img src="{$thumbnail_url}" width="100" height="70">
                </div>
                <div class="l-sidebar__connection-article-list__row__wrapper">
                  <div class="l-sidebar__connection-article-list__row__wrapper__title"><a href="{$permalink}">{$title}</a></div>
                </div>
              </article>
RESULT;
    }
);
    ?>
  </div>
  <div class="l-sidebar__title">カテゴリー</div>
  <div class="l-sidebar__category-list">
    <?php
      foreach (get_categories() as $category) {
          $category_link = get_category_link($category->term_id);
          echo "<div class='l-sidebar__category-list__row'><div class='l-sidebar__category-list__row__category-name'><a href='{$category_link}'>・{$category->name}</a></div></div>";
      }
    ?>
  </div>
</aside>

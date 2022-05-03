<?php
$bl_helper = BlHelper::getInstance();
$category = get_the_category();
?>
<aside class="sidebar">
  <div class="sidebar-title">関連記事</div>
  <div class="blog-connection-list">
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
              <article class="blog-connection-row">
                <div class="blog-connection-img-box">
                  <img src="{$thumbnail_url}" width="100" height="70">
                </div>
                <div class="blog-connection-text-box">
                  <div class="blog-connection-title"><a href="{$permalink}">{$title}</a></div>
                </div>
              </article>
RESULT;
      }
    );
    ?>
  </div>
  <div class="sidebar-title">カテゴリー</div>
  <div class="category-list">
    <?php
    foreach (get_categories() as $category) {
      $category_link = get_category_link($category->term_id);
      echo "<div class='category-name'><a href='{$category_link}'>・{$category->name}</a></div>";
    }
    ?>
  </div>
</aside>

<?php
  $bl_helper = new BlHelper();
  $category = get_the_category();
?>
<aside class="sidebar">
  <div class="sidebar-title">関連記事</div>
  <?php
    echo "<div class='blog-connection-list'>" . $bl_helper->execGetWpQuery(
      "",
      array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'cat' => $category[0]->cat_name
      ),
      "ViewHelper::getConnectionBlogList"
    ) . "</div>";
  ?>
  <div class="sidebar-title">カテゴリー</div>
  <div class="category-list">
    <?php
      foreach(get_categories() as $category){
        $category_link = get_category_link($category->term_id);
        echo "<div class='category-name'><a href='{$category_link}'>・{$category->name}</a></div>";
      }
    ?>
  </div>
</aside>
<?php $bl_helper = new BlHelper() ?>
<section class="post">
  <div class="post-contents">
    <div class="blog-contents">
      <div class="blog-title"><?= Constants::BREADCLUMB_TITLE_BLOG ?></div>
      <?php
        echo "<div class='blog-list'>" . $bl_helper->execGetWpQuery(
          "",
          array(
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC'
          ),
          "ViewHelper::getPostBlogList"
        ) . "</div>";
    ?>
    </div>
    <div class="correct-contents">
      <div class="correct-title">お知らせ</div>
      <?php
        echo "<div class='correct-list'>" . $bl_helper->execGetCustomPosts(
          "",
          array(
            'post_type' => 'correct',
            'posts_per_page' => 3
          ),
          "2",
          "ViewHelper::getPostCorrectList"
        ) . "</div>";
      ?>
    </div>
  </div>
</section>
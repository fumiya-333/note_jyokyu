<?php 
  $bl_helper = new BlHelper();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="blog">
  <div class="blog-contents">
    <div class="blog-title">新着一覧</div>
    <?php
      echo "<div class='blog-list'>" . $bl_helper->execGetWpQuery(
        "",
        array(
          'paged' => $paged,
          'posts_per_page' => 9,
          'orderby' => 'date',
          'order' => 'DESC'
        ),
        "ViewHelper::getBlogList"
      ) . "</div>";
    ?>
  </div>
  <?= ViewHelper::getPaginate($bl_helper->getWpQuery(), $paged); ?>
</section>
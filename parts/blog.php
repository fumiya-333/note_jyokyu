<?php 
  $bl_helper = new BlHelper();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="blog">
  <div class="blog-contents">
    <div class="blog-title"><?= $args["blog_title"] ?></div>
    <?php
      echo "<div class='blog-list'>" . $bl_helper->execGetWpQuery(
        "",
        array(
          'paged' => $paged,
          'posts_per_page' => 10,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'post',
          'cat' => $args["category_id"]
        ),
        "ViewHelper::getBlogList"
      ) . "</div>";
    ?>
  </div>
  <?= ViewHelper::getPaginate(array(
        'total' => $bl_helper->getWpQuery()->max_num_pages,
        'mid_size' => 2,
        'current' => ($paged ? $paged : 1),
        'prev_next' => false,
  )); ?>
</section>
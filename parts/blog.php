<?php 
  $bl_helper = BlHelper::getInstance();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;

  $blog_title = "新着一覧";
  $category_id = "";
  if(is_category()){
    $cat = get_category(get_query_var("cat"));
    $blog_title = "{$cat->cat_name}一覧";
    $category_id = $cat->cat_ID;
  }
?>
<section class="blog">
  <div class="blog-inner">
    <div class="blog-contents">
      <div class="blog-title"><?= $blog_title ?></div>
      <div class="blog-list">
        <?php
          echo $bl_helper->execGetWpQuery(
            array(
              'paged' => $paged,
              'posts_per_page' => 10,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post',
              'cat' => $category_id
            ),
            function(&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
              $result .= <<< RESULT
                <article class="blog-row">
                  <div class="blog-img-box" style="background-image: url({$thumbnail_url});">
                    <div class="blog-category">
                      {$category[0]->cat_name}
                    </div>
                  </div>
                  <div class="blog-text-box">
                    <div class="blog-date">{$time}</div>
                    <div class="blog-row-title"><a href="{$permalink}">{$title}</a></div>
                    <div class="blog-content">{$content}</div>
                  </div>
                </article>
  RESULT;
            }
          );
        ?>
      </div>
    </div>
    <?php 
      echo ViewHelper::getPaginate(array(
          'total' => $bl_helper->getWpQuery()->max_num_pages,
          'mid_size' => 2,
          'current' => ($paged ? $paged : 1),
          'prev_next' => false,
      ));
    ?>
  </div>
</section>
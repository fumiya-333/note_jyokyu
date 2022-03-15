<?php 
  $bl_helper = BlHelper::getInstance();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="blog">
  <div class="blog-contents">
    <div class="blog-title"><?= $args["blog_title"] ?></div>
    <div class="blog-list">
      <?php
        echo $bl_helper->execGetWpQuery(
          array(
            'paged' => $paged,
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'cat' => $args["category_id"]
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
</section>
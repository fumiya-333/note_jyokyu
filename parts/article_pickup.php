<?php
  $bl_helper = BlHelper::getInstance();
?>
<div class="article-pickup">
  <div class="article-pickup-contents">
    <div class="article-pickup-title">おすすめの記事</div>
    <div class="article-pickup-list">
      <?php
        echo $bl_helper->execGetWpQuery(
          array(
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            "tag_id" => "pickup"
          ),
          function(&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
            $result .= <<< RESULT
              <article class="blog-pickup-row">
                <div class="blog-pickup-img-box">
                  <img src="{$thumbnail_url}" width="210" height="128">
                </div>
                <div class="blog-pickup-text-box">
                  <div class="blog-pickup-date">{$time}</div>
                  <div class="blog-pickup-title"><a href="{$permalink}">{$title}</a></div>
                </div>
              </article>
RESULT;
          }
        );
      ?>
    </div>
  </div>
</div>
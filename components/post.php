<?php
  $bl_helper = BlHelper::getInstance();
?>
<section class="post">
  <div class="post-inner">
    <div class="blog-inner">
      <div class="blog-title"><?= Constants::BREADCLUMB_TITLE_BLOG ?></div>
        <div class="blog-list">
          <?php
            echo $bl_helper->execGetWpQuery(
              array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post'
              ),
              function(string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
                $result .= <<< RESULT
                  <article class="blog-row">
                    <div class="blog-img-box" style="background-image: url({$thumbnail_url});">
                      <div class="blog-category">
                        {$category[0]->cat_name}
                      </div>
                    </div>
                    <div class="blog-text-box">
                      <div class="blog-row-title"><a href="{$permalink}">{$title}</a></div>
                      <div class="blog-date">{$time}</div>
                    </div>
                  </article>
RESULT;
              }
            );
        ?>
      </div>
    </div>
    <div class="correct-inner">
      <div class="correct-title">お知らせ</div>
      <div class="correct-list">
        <?php
          echo $bl_helper->execGetWpQuery(
            array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'correct',
            ),
            function(string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
              $result .= <<< RESULT
                <article class="correct-row">
                  <div class="correct-date">{$time}</div>
                  <div class="correct-row-title"><a href="{$permalink}">{$title}</a></div>
                </article>
RESULT;
            }
          );
        ?>
      </div>
    </div>
  </div>
</section>
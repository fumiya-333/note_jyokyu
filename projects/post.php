<?php
  $bl_helper = BlHelper::getInstance();
?>
<section class="p-post">
  <div class="p-post__inner">
    <div class="p-post__inner__blog">
      <div class="p-post__inner__blog__title">
        <?= Constants::BREADCLUMB_TITLE_BLOG ?>
      </div>
      <div class="p-post__inner__blog__list">
        <?php
          echo $bl_helper->execGetWpQuery(
    array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post'
            ),
    function (string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
                <article class="p-post__inner__blog__list__row">
                  <div class="p-post__inner__blog__list__row__bg-img" style="background-image: url({$thumbnail_url});">
                    <div class="p-post__inner__blog__list__row__bg-img__category">
                      {$category[0]->cat_name}
                    </div>
                  </div>
                  <div class="p-post__inner__blog__list__row__wrapper">
                    <div class="p-post__inner__blog__list__row__wrapper__title"><a href="{$permalink}">{$title}</a></div>
                    <div class="p-post__inner__blog__list__row__wrapper__date">{$time}</div>
                  </div>
                </article>
RESULT;
    }
);?>
      </div>
    </div>
    <div class="p-post__inner__correct">
      <div class="p-post__inner__correct__title">お知らせ</div>
      <div class="p-post__inner__correct__list">
        <?php
          echo $bl_helper->execGetWpQuery(
    array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'correct',
            ),
    function (string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
                <article class="p-post__inner__correct__list__row">
                  <div class="p-post__inner__correct__list__row__date">{$time}</div>
                  <div class="p-post__inner__correct__list__row__title"><a href="{$permalink}">{$title}</a></div>
                </article>
RESULT;
    }
);
        ?>
      </div>
    </div>
  </div>
</section>

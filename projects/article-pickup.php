<?php
  $bl_helper = BlHelper::getInstance();
?>
<div class="p-article-pickup">
  <div class="p-article-pickup__inner">
    <div class="p-article-pickup__inner__title">おすすめの記事</div>
    <div class="p-article-pickup__inner__list">
      <?php
        echo $bl_helper->execGetWpQuery(
    array(
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
            "post_type" => "post",
            "tag" => "pickup"
          ),
    function (&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
              <article class="p-article-pickup__inner__list__row">
                <div class="p-article-pickup__inner__list__row__bg-img" style="background-image: url({$thumbnail_url});">
                  <div class="p-article-pickup__inner__list__row__bg-img__category">
                    {$category[0]->cat_name}
                  </div>
                </div>
                <div class="p-article-pickup__inner__list__row__wrapper">
                  <div class="p-article-pickup__inner__list__row__wrapper__date">{$time}</div>
                  <div class="p-article-pickup__inner__list__row__wrapper__title"><a href="{$permalink}">{$title}</a></div>
                </div>
              </article>
RESULT;
    }
);
      ?>
    </div>
  </div>
</div>

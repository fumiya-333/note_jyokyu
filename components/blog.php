<?php
  $bl_helper = BlHelper::getInstance();
  $paged = get_query_var("paged") ? get_query_var("paged") : 1;
  $cat = is_category() ? get_category(get_query_var("cat")) : "";
?>
<section class="p-blog">
  <div class="p-blog__inner">
    <div class="p-blog__inner__contents">
      <div class="p-blog__inner__contents__title"><?= !empty($cat) ? $cat->cat_name : "新着" ?>一覧</div>
      <div class="p-blog__inner__contents__list">
        <?php
          echo $bl_helper->execGetWpQuery(
    array(
              'paged' => $paged,
              'posts_per_page' => 10,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post',
              'cat' => !empty($cat) ? $cat->cat_ID : "新着",
            ),
    function (&$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
                <article class="p-blog__inner__contents__list__row">
                  <div class="p-blog__inner__contents__list__row__bg-img" style="background-image: url({$thumbnail_url});">
                    <div class="p-blog__inner__contents__list__row__bg-img__category">
                      {$category[0]->cat_name}
                    </div>
                  </div>
                  <div class="p-blog__inner__contents__list__row__wrapper">
                    <div class="p-blog__inner__contents__list__row__wrapper__date">{$time}</div>
                    <div class="p-blog__inner__contents__list__row__wrapper__title"><a href="{$permalink}">{$title}</a></div>
                    <div class="p-blog__inner__contents__list__row__wrapper__content">{$content}</div>
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

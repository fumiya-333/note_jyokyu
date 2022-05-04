<?php
  $bl_helper = BlHelper::getInstance();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="p-correct">
  <div class="p-correct__inner">
    <div class="p-correct__inner__title">お知らせ一覧</div>
    <div class="p-correct__inner__list">
      <?php
        echo $bl_helper->execGetWpQuery(
    array(
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'correct',
          ),
    function (string &$result, $category, $thumbnail_url, $permalink, $title, $time, $content) {
        $result .= <<< RESULT
              <article class="p-correct__inner__list__row">
                <div class="p-correct__inner__list__row__date">{$time}</div>
                <div class="p-correct__inner__list__row__title"><a href="{$permalink}">{$title}</a></div>
              </article>
RESULT;
    }
);
      ?>
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

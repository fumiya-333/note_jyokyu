<?php
  $bl_helper = BlHelper::getInstance();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="correct">
  <div class="correct-inner">
    <div class="correct-title">お知らせ一覧</div>
    <div class="correct-list">
      <?php
        echo $bl_helper->execGetWpQuery(
          array(
            'posts_per_page' => 10,
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
<?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="p-correct">
  <div class="p-correct__inner">
    <div class="p-correct__inner__title">お知らせ一覧</div>
    <div class="p-correct__inner__list">
      <?php
        $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'correct',
          ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="p-correct__inner__list__row">
            <div class="p-correct__inner__list__row__date">
              {$GLOBALS["call_hear_doc_deploy_func"](get_the_time(get_option("date_format")))}
            </div>
            <div class="p-correct__inner__list__row__title">
              <a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a>
            </div>
          </article>
RESULT;
    }
);
      ?>
    </div>
    <?php
      get_template_part(CommonUtil::joinDirPathComponents(Constants::FILE_PATH_PAGINATE), null, array(
        'total' => $GLOBALS["bl_helper"]->getWpQuery()->max_num_pages,
        'mid_size' => 2,
        'current' => ($paged ? $paged : 1),
        'prev_next' => false,
      ));
    ?>
  </div>
</section>

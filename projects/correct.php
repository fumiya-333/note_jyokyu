<?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>
<section class="p-correct">
  <div class="p-correct__inner">
    <div class="p-correct__inner__title">お知らせ一覧</div>
    <div class="p-correct__inner__list">
      <?php
        $GLOBALS["BL_HELPER"]
        ->execGetWpQuery(
            array(
              "posts_per_page" => 10,
              "orderby" => "date",
              "order" => "DESC",
              "post_type" => "correct",
            ),
            function (array $sch_args) {
                echo <<< RESULT
                  <article class="p-correct__inner__list__row">
                    <div class="p-correct__inner__list__row__date">
                      {$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_time(get_option("date_format")))}
                    </div>
                    <div class="p-correct__inner__list__row__title">
                      <a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_permalink())}">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_title())}</a>
                    </div>
                  </article>
RESULT;
            }
        );
      ?>
    </div>
    <?php
      get_template_part(CommonUtil::joinDirPathLayouts(Constants::FILE_PATH_PAGINATE), null, array(
        "total" => $GLOBALS["BL_HELPER"]->getWpQuery()->max_num_pages,
        "mid_size" => 2,
        "current" => ($paged ? $paged : 1),
        "prev_next" => false,
      ));
    ?>
  </div>
</section>

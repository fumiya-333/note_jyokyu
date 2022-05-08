<section class="c-block-center p-correct">
  <div class="p-correct__inner">
    <div class="p-correct__inner__title">お知らせ一覧</div>
    <div class="p-correct__inner__list">
      <?php
        $wp_query = $GLOBALS["BL_HELPER"]->
        execWpQuery(
            array(
              "paged" => CommonUtil::getQueryPaged(),
              "posts_per_page" => 10,
              "orderby" => "date",
              "order" => "DESC",
              "post_type" => "correct",
            ),
            function () {
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
      get_template_part(CommonUtil::joinDirPathProjects(Constants::FILE_PATH_PAGINATE), null, array(
        "total" => $wp_query->max_num_pages,
        "mid_size" => 2,
        "current" => (CommonUtil::getQueryPaged() ? CommonUtil::getQueryPaged() : 1),
        "prev_next" => false,
      ));
    ?>
  </div>
</section>

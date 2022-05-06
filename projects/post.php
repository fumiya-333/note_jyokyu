<section class="p-post">
  <div class="p-post__inner">
    <div class="p-post__inner__blog">
      <div class="p-post__inner__blog__title">
        <?= Constants::BREADCLUMB_TITLE_BLOG ?>
      </div>
      <div class="p-post__inner__blog__list">
        <?php
          $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post'
            ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="p-post__inner__blog__list__row">
            <div class="p-post__inner__blog__list__row__bg-img" style="background-image: url({$GLOBALS["call_hear_doc_deploy_func"](CommonUtil::getPostThumbnailUrl())});">
              <div class="p-post__inner__blog__list__row__bg-img__category">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_category())[0]->cat_name}
              </div>
            </div>
            <div class="p-post__inner__blog__list__row__wrapper">
              <div class="p-post__inner__blog__list__row__wrapper__title">
                <a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a>
              </div>
              <div class="p-post__inner__blog__list__row__wrapper__date">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_time(get_option("date_format")))}
              </div>
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
          $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'correct',
            ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="p-post__inner__correct__list__row">
            <div class="p-post__inner__correct__list__row__date">{$GLOBALS["call_hear_doc_deploy_func"](get_the_time(get_option("date_format")))}</div>
            <div class="p-post__inner__correct__list__row__title"><a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a></div>
          </article>
RESULT;
    }
);
        ?>
      </div>
    </div>
  </div>
</section>

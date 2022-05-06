<div class="p-article-pickup">
  <div class="p-article-pickup__inner">
    <div class="p-article-pickup__inner__title">おすすめの記事</div>
    <div class="p-article-pickup__inner__list">
      <?php
        $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
            "post_type" => "post",
            "tag" => "pickup"
          ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="p-article-pickup__inner__list__row">
            <div class="p-article-pickup__inner__list__row__bg-img" style="background-image: url({$GLOBALS["call_hear_doc_deploy_func"](CommonUtil::getPostThumbnailUrl())});">
              <div class="p-article-pickup__inner__list__row__bg-img__category">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_category())[0]->cat_name}
              </div>
            </div>
            <div class="p-article-pickup__inner__list__row__wrapper">
              <div class="p-article-pickup__inner__list__row__wrapper__date">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_time(get_option("date_format")))}
              </div>
              <div class="p-article-pickup__inner__list__row__wrapper__title">
                <a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a>
              </div>
            </div>
          </article>
RESULT;
    }
);
      ?>
    </div>
  </div>
</div>
